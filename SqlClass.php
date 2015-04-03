<?php
namespace ponbiki\thegame;

class SqlClass
{
    protected $dbSettings;
    
    function __construct()
    {
        $dbsettings = new settings();
        try {
            $pdo = new PDO(
                sprintf(
                    'mysql:host=%s;dbname=%s;port=%s;charset=%s',
                    $settings['host'],
                    $settings['name'],
                    $settings['port'],
                    $settings['charset']
                ),
                $settings['username'],
                    $settings['password']
            );
        } catch (Exception $ex) {
            echo "Database connection failed";
            exit;
        }
    }
}
