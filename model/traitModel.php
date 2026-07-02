<?php

/**
 * @author Henoc  Vik
 */


trait traitModel
{
    protected static function createModel(array $params)
    {
        if (empty($params)) {
            return false;
        }
        $colums = array_keys($params['columns_values']);
        if (empty($colums)) {
            return false;
        }
        $query = ' INSERT INTO ' . $params['table_name'] . ' ( ';
        $c_length = count($colums);
        for ($i = 0; $i < $c_length; $i++) {
            if ($i == ($c_length - 1)) {
                $query .= $colums[$i] . ' )';
            } else {
                $query .= $colums[$i] . " , ";
            }
        }

        $query .= "VALUES (";

        $counter = 0;
        foreach ($params['columns_values'] as $key => $value) {
            $counter++;
            if ($counter == $c_length) {
                $query .= ':' . $key . ' )';
            } else {
                $query .= ':' . $key . ' , ';
            }
        }
        // dd($query);

        // connection
        if (isset($params["db_connection"])) {
            $bdd = getConnection($params['db_connection']);
        } else {
            //par défaut
            $bdd = getConnection();
        }

        try {
            $q = $bdd->prepare($query);
            $q->execute($params['columns_values']);
            $id = $bdd->lastInsertId();
            $q->closeCursor();
            return $id;
        } catch (\Throwable $th) {
            dd($th);
            return false;
        }
    }

    protected static function updateModel(array $params)
    {
        if (empty($params)) {

            return false;
        }

        if (isset($params['columns_values']['id'])) {
            // l'id ne peut pas être modifié
            return false;
        }

        $query = "UPDATE " . $params['table_name'];
        if (isset($params['join'])) {
            $query .= " " . $params['join'];
        }
        $query .= " SET ";

        $columns = array_keys($params['columns_values']);

        if (empty($columns)) {

            return false;
        }
        $c_length = count($columns);

        for ($i = 0; $i < $c_length; $i++) {
            if ($i == ($c_length - 1)) {
                $query .= $columns[$i] . ' = :' . $columns[$i];
            } else {
                $query .= $columns[$i] . ' = :' . $columns[$i] . ' , ';
            }
        }

        //where
        $query .= " WHERE " . $params['where'];

        // connection
        if (isset($params["db_connection"])) {
            $bdd = getConnection($params['db_connection']);
        } else {
            //par défaut
            $bdd = getConnection();
        }

        //var_dump($query);
        try {
            $q = $bdd->prepare($query);
            if (isset($params['execute'])) {
                $q->execute(array_merge($params['columns_values'], $params['execute']));
            } else {
                $q->execute($params['columns_values']);
            }

            $q->closeCursor();
            return true;
        } catch (\Throwable $th) {
            dd($th); //en mode dev
            //var_dump("okay1");
            return false;
        }
    }

    protected static function getModel(array $params)
    {
        //var_dump("okay");
        if (empty($params)) {
            return false;
        }
        if (isset($params["db_connection"])) {
            $bdd = getConnection($params['db_connection']);
        } else {
            //par défaut
            $bdd = getConnection();
        }

        $query = " SELECT ";
        if (isset($params['select'])) {
            $query .= $params['select'];
        } else {
            $query .= "*";
        }

        $query .= " FROM " . $params['table_name'];

        if (isset($params['join'])) {
            $query .= " " . $params['join'];
        }

        $query .= " WHERE " . $params['where'];

        if (isset($params['orderBy'])) {
            $query .= " ORDER BY " . $params['orderBy'];
        }

        try {
            $q = $bdd->prepare($query);
            if (isset($params['execute'])) {
                $q->execute($params["execute"]);
            } else {
                $q->execute();
            }
            $v = $q->fetch();
            $q->closeCursor();
            return $v;
        } catch (\Throwable $th) {
            dd($th);
            return false;
        }
    }

    protected static function getAllModel(array $params)
    {
        if (empty($params)) {
            return false;
        }
        if (isset($params["db_connection"])) {
            $bdd = getConnection($params['db_connection']);
        } else {
            //par défaut
            $bdd = getConnection();
        }

        $query = " SELECT ";
        if (isset($params['select'])) {
            $query .= $params['select'];
        } else {
            $query .= "*";
        }
        $query .= " FROM " . $params['table_name'];
        if (isset($params['join'])) {
            $query .= " " . $params['join'];
        }

        if (isset($params['where'])) {
            $query .= " WHERE " . $params['where'];
        }
        if (isset($params['groupBy'])) {
            $query .= " GROUP BY " . $params['groupBy'];
        }
        if (isset($params['having'])) {
            $query .= " HAVING " . $params['having'];
        }
        if (isset($params['orderBy'])) {
            $query .= " ORDER BY " . $params['orderBy'];
        }
        if (isset($params['limit'])) {
            $query .= " LIMIT " . $params['limit'];
        }
        // var_dump($query); echo'<br><br>';
        if (isset($params['execute'])) {
            $q = $bdd->prepare($query);
            $q->execute($params["execute"]);
        } else {
            $q = $bdd->query($query);
        }
        $v = $q->fetchAll();
        $q->closeCursor();
        return $v;
    }

    protected static function deleteModel(array $params)
    {
        if (empty($params)) {
            return false;
        }
        if (isset($params["db_connection"])) {
            $bdd = getConnection($params['db_connection']);
        } else {
            //par défaut
            $bdd = getConnection();
        }

        $query = " DELETE FROM " . $params['table_name'] . " WHERE " . $params['where'];

        try {
            $q = $bdd->prepare($query);
            $q->execute($params['execute']);
            $q->closeCursor();
            return true;
        } catch (\Throwable $th) {
            dd($th);
            return false;
        }
    }
}
