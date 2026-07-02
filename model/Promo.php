<?php
require_once "ModelInterface.php";
require_once "traitModel.php";

class Promo implements ModelInterface
{
    use traitModel;

    private const table_name = "gs_promo";

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

    public static function findByCode(string $code): array|false
    {
        return self::get([
            'where'   => "code = :code AND is_active = 1 AND (expiry_date IS NULL OR expiry_date >= CURDATE())",
            'execute' => ['code' => $code],
        ]);
    }
}
