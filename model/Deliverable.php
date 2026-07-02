<?php
require_once "ModelInterface.php";
require_once "traitModel.php";

class Deliverable implements ModelInterface
{
    use traitModel;

    private const table_name = "gs_deliverables";

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

    public static function getAllWithBooking(array $params = []): array
    {
        $where   = isset($params['where']) ? 'WHERE ' . $params['where'] : '';
        $order   = $params['orderBy'] ?? 'd.created_at DESC';
        $execute = $params['execute'] ?? [];

        $bdd = getConnection();
        $q = $bdd->prepare("
            SELECT d.*,
                   b.slug AS booking_slug, b.booking_date,
                   COALESCE(u.name, b.guest_name) AS client_name,
                   s.name AS studio_name
            FROM gs_deliverables d
            LEFT JOIN gs_bookings b ON b.id = d.booking_id
            LEFT JOIN gs_users    u ON u.id = b.user_id
            LEFT JOIN gs_studios  s ON s.id = b.studio_id
            $where
            ORDER BY $order
        ");
        $q->execute($execute);
        return $q->fetchAll();
    }
}
