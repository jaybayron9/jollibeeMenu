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

    public function receipt() {
        $value = $_POST['values'];

        $_SESSION['product'] = $value[0];
        $_SESSION['price'] = $value[1];

        return parent::alert('success', '');
    }
}

require('routes/menu.php');