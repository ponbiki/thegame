<?php
require_once('../settings.php');

class SqlClass
{
    protected $settings;
    
    public function __construct($settings)
    {
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
