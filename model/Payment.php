<?php
require_once "ModelInterface.php";
require_once "traitModel.php";

class Payment implements ModelInterface
{
    use traitModel;

    private const table_name = "gs_payments";

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

    public static function getAll(array $params = [])
    {
        $params["table_name"] = self::table_name;
        return self::getAllModel($params);
    }

    public static function getAllWithDetails(array $params = []): array
    {
        $where   = isset($params['where']) ? 'WHERE ' . $params['where'] : '';
        $order   = $params['orderBy'] ?? 'p.created_at DESC';
        $limit   = isset($params['limit']) ? 'LIMIT ' . (int)$params['limit'] : '';
        $execute = $params['execute'] ?? [];

        $bdd = getConnection();
        $q = $bdd->prepare("
            SELECT p.*,
                   b.slug AS booking_slug,
                   COALESCE(u.name, b.guest_name) AS client_name,
                   COALESCE(u.email, b.guest_email) AS client_email,
                   t.booking_date, t.start_time, t.end_time,
                   s.name AS studio_name
            FROM gs_payments p
            LEFT JOIN gs_bookings b ON b.id = p.booking_id
            LEFT JOIN gs_users    u ON u.id = b.user_id
            LEFT JOIN (
                SELECT booking_id, MIN(id) AS first_id
                FROM gs_tournages
                GROUP BY booking_id
            ) ft ON ft.booking_id = b.id
            LEFT JOIN gs_tournages t ON t.id = ft.first_id
            LEFT JOIN gs_decors   d ON d.id = t.decor_id
            LEFT JOIN gs_studios  s ON s.id = d.studio_id
            $where
            ORDER BY $order
            $limit
        ");
        $q->execute($execute);
        return $q->fetchAll();
    }

    public static function totalConfirmedThisMonth(): float
    {
        $bdd = getConnection();
        $q = $bdd->query("SELECT COALESCE(SUM(amount),0) FROM gs_payments WHERE status='confirmed' AND MONTH(paid_at)=MONTH(NOW()) AND YEAR(paid_at)=YEAR(NOW())");
        return (float) $q->fetchColumn();
    }
}
