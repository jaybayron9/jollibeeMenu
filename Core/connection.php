<?php

class Connection 
{
    private static $instance = null;
    public static $conn;
    var $message = 'There\'s a problem connecting to the database.';

    public function __construct()
    {
        $config = require('config.php');

        extract($config['database']);

        try {
            self::$conn = new mysqli($host, $user, $pass, $name);
        } catch(Exception $e) {
            echo "There's a problem connecting to database: " . $e->$this->message;
        }
    }

    public static function closeConnection()
    {
        mysqli_close(self::$conn);
        self::$instance = null;
    }

    public function alert($status, $message)
    {
        return json_encode(
                array(
                    'status' => $status, 
                    'msg' => $message
                )
            );
    }
}