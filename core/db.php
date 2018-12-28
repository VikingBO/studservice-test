<?php
/**
 * Created by PhpStorm.
 * User: Pilipenko Andrey
 * Nickname: VikingBO
 * Github: https://github.com/VikingBO
 * Gitlab: https://gitlab.com/VikingBO
 * BitBucket: https://bitbucket.org/VikingBO/
 * Email: pilipenkoav@rambler.ru
 * Email: reaver-dron@yandex.ru
 * Email: pilipenkoavspb@gmail.com
 * Date: 24.12.2018
 */

class db
{
    private static $_instance;
    private $db;

    private function __construct()
    {
        try {
            $this->db = new PDO("mysql:host={DB_HOST};dbname={DB_BASE}", DB_USER, DB_PASS);
            $result = 'Подключение к базе';
        } catch (Exception $e) {
            $result = 'Произошла ошибка подключения к базе данных' . $e->getMessage();
        }

        log::set_log($result);
    }

    public static function getInstance() {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    private function __clone() {
    }

    private function __wakeup() {
    }

    public function fetchAll($queryString = '')
    {
        $result = $queryString;

        if (!empty($queryString)) {
            try {
                $result = $this->db->query($queryString)->fetchAll();
            } catch (Exception $e) {
                $result = [
                    'error' => $e->getMessage()
                ];
            }
        }

        if (is_array($result)) {
            $log_string = log::arr_to_str($result);
        }

        log::set_log($log_string);
        return $result;
    }

    public function exec($queryString)
    {
        $result = $queryString;

        if (!empty($queryString)) {
            try {
                $result = $this->db->exec($queryString);
            } catch (Exception $e) {
                $result = [
                    'error' => $e->getMessage()
                ];
            }
        }

        log::set_log($result);
        return $result;
    }
}