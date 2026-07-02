<?php

function _settingsInit(PDO $bdd): void
{
    static $done = false;
    if ($done) return;
    $done = true;

    $bdd->exec("
        CREATE TABLE IF NOT EXISTS gs_settings (
            id            INT AUTO_INCREMENT PRIMARY KEY,
            setting_key   VARCHAR(100) NOT NULL UNIQUE,
            setting_value TEXT,
            updated_at    TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )
    ");

    $ins = $bdd->prepare(
        "INSERT IGNORE INTO gs_settings (setting_key, setting_value) VALUES (:k, :v)"
    );
    foreach ([
        'studio_open_hour'  => '8',
        'studio_close_hour' => '23',
        'studio_timezone'   => 'UTC+1',
    ] as $k => $v) {
        $ins->execute(['k' => $k, 'v' => $v]);
    }
}

function getSetting(string $key, $default = null)
{
    static $cache = null;
    if ($cache === null) {
        $bdd   = getConnection();
        _settingsInit($bdd);
        $stmt  = $bdd->query("SELECT setting_key, setting_value FROM gs_settings");
        $cache = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
    }
    return array_key_exists($key, $cache) ? $cache[$key] : $default;
}

function saveSetting(string $key, string $value): void
{
    $bdd  = getConnection();
    _settingsInit($bdd);
    $stmt = $bdd->prepare("
        INSERT INTO gs_settings (setting_key, setting_value)
        VALUES (:k, :v)
        ON DUPLICATE KEY UPDATE setting_value = VALUES(setting_value)
    ");
    $stmt->execute(['k' => $key, 'v' => $value]);
}
