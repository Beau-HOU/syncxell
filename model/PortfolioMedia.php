<?php
require_once "ModelInterface.php";
require_once "traitModel.php";

class PortfolioMedia implements ModelInterface
{
    use traitModel;

    private const table_name = "gs_portfolio_medias";

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

    public static function getByPortfolioId(int $portfolioId): array
    {
        $bdd = getConnection();
        $q   = $bdd->prepare(
            "SELECT * FROM gs_portfolio_medias WHERE portfolio_id = :pid ORDER BY sort_order ASC, id ASC"
        );
        $q->execute(['pid' => $portfolioId]);
        return $q->fetchAll();
    }

    public static function deleteByPortfolioId(int $portfolioId): void
    {
        $bdd = getConnection();
        $q   = $bdd->prepare("DELETE FROM gs_portfolio_medias WHERE portfolio_id = :pid");
        $q->execute(['pid' => $portfolioId]);
    }
}
