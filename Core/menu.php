<?php 

class Menu extends Connection {
    public static function get($table) {
        return parent::$conn->query("SELECT * FROM $table");
    }

    public static function checkCategory($GET, $index) {
        if ($GET == $index) {
            return true;
        }
        return false;
    }
}

require('routes/menu.php');