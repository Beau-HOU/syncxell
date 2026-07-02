<?php
require_once "ModelInterface.php";
require_once "traitModel.php";

class User implements ModelInterface
{
    use traitModel;

    private const table_name = "gs_users";

    // -- CRUD ------------------------------------------------------------------

    public static function create(array $params)
    {
        $params["table_name"] = self::table_name;
        return self::createModel($params);
    }

    public static function update(array $params)
    {
        $params["table_name"] = self::table_name;
        return self::updateModel($params);
    }

    public static function delete(array $params)
    {
        $params["table_name"] = self::table_name;
        return self::deleteModel($params);
    }

    public static function get(array $params)
    {
        $params["table_name"] = self::table_name;
        return self::getModel($params);
    }

    public static function getAll(array $params)
    {
        $params["table_name"] = self::table_name;
        return self::getAllModel($params);
    }

    // -- AUTHENTIFICATION CLIENT -----------------------------------------------

    /**
     * Ouvre une session utilisateur (role: user).
     * Conserve l'id pour les opérations Phase 1.
     */
    public static function authenticate(array $user, bool $remember = false): bool
    {
        unset($user['password'], $user['otp']);

        $_SESSION['role'] = $user['role'] ?? 'user';
        $_SESSION['user'] = $user;

        if ($remember && isset($user['slug'])) {
            self::setRememberCookie('u_slug', $user['slug']);
        }
        return true;
    }

    /** Reconnexion automatique via cookie (client). */
    public static function loginWithCookie(): bool
    {
        if (!isset($_COOKIE['u_slug'])) return false;

        $user = self::get([
            'where'   => 'slug = :s AND is_deleted = 0 AND is_blocked = 0 AND LOWER(role) = \'user\'',
            'execute' => ['s' => $_COOKIE['u_slug']],
        ]);
        if (empty($user)) return false;

        return self::authenticate($user);
    }

    // -- AUTHENTIFICATION ADMIN ------------------------------------------------

    /**
     * Ouvre une session admin (role: admin | superadmin).
     * Conserve l'id pour les opérations Phase 1.
     */
    public static function authenticate_admin(array $user, bool $remember = false): bool
    {
        unset($user['password'], $user['otp']);

        $_SESSION['role']       = $user['role'] ?? 'admin';
        $_SESSION['admin_user'] = $user;

        if ($remember && isset($user['slug'])) {
            self::setRememberCookie('admin_slug', $user['slug']);
        }
        return true;
    }

    /** Reconnexion automatique via cookie (admin). */
    public static function loginAdminWithCookie(): bool
    {
        if (!isset($_COOKIE['admin_slug'])) return false;

        $user = self::get([
            'where'   => "slug = :s AND is_deleted = 0 AND is_blocked = 0 AND (LOWER(role) = 'admin' OR LOWER(role) = 'superadmin')",
            'execute' => ['s' => $_COOKIE['admin_slug']],
        ]);
        if (empty($user)) return false;

        return self::authenticate_admin($user);
    }

    // -- CONTRÔLE D'ACCÈS -----------------------------------------------------

    /**
     * Vérifie si l'utilisateur connecté a au moins le rôle demandé.
     * Hiérarchie : user(1) < admin(2) < superadmin(3)
     */
    public static function isGranted(string $role): bool
    {
        if (!isset($_SESSION['role'])) return false;

        $rank = ['user' => 1, 'admin' => 2, 'superadmin' => 3];

        $current = strtolower((string)$_SESSION['role']);
        $target  = strtolower(str_replace('_', '', $role)); // super_admin ? superadmin

        $curRank = $rank[$current] ?? 0;
        $reqRank = $rank[$target]  ?? 0;

        return $reqRank > 0 && $curRank >= $reqRank;
    }

    // -- DÉCONNEXION ----------------------------------------------------------

    public static function logout(): void
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_unset();
            session_destroy();
        }
        foreach (['u_slug', 'admin_slug'] as $cookie) {
            if (isset($_COOKIE[$cookie])) {
                setcookie($cookie, '', time() - 3600, '/');
                unset($_COOKIE[$cookie]);
            }
        }
    }

    // -- STATISTIQUES ---------------------------------------------

    public static function countClients(): int
    {
        $bdd = getConnection();
        $q   = $bdd->query("SELECT COUNT(*) FROM gs_users WHERE role = 'user' AND is_deleted = 0");
        return (int) $q->fetchColumn();
    }

    // -- VALIDATION -----------------------------------------------------------

    public static function strongPassword(string $password): array
    {
        if (
            strlen($password) < 8 ||
            !preg_match('/[A-Z]/', $password) ||
            !preg_match('/[a-z]/', $password) ||
            !preg_match('/[0-9]/', $password) ||
            !preg_match('/[\W_]/', $password)
        ) {
            return [false, 'Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractére spécial.'];
        }
        return [true];
    }

    // -- PRIVé -----------------------------------------------------------------

    private static function setRememberCookie(string $name, string $value): void
    {
        $domain = $_SERVER['HTTP_HOST'] ?? '';
        $secure = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
        setcookie($name, $value, time() + 86400 * 30, '/', $domain, $secure, true);
    }
}
