<?php

/**
 * @author RIL
 */
interface ModelInterface
{
    public static function create(array $params);

    public static function update(array $params);

    public static function delete(array $params);

    public static function get(array $params);

    public static function getAll(array $params);
}
