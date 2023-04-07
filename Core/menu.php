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

    public function show_orders() {
        $orders = parent::$conn->query("SELECT * FROM orders");
        while ($row = $orders->fetch_assoc()) {
            echo '
                <div class="col-span-3 grid grid-cols-3 bg-amber-300 rounded-lg shadow-sm">
                    <div class="col-span-2 px-2 py-1 text-2xl">' . $row['purchase'] . '</div>
                    <div class="col-span-1 px-2 py-1 text-2xl"><span class="text-green-400">₱</span>' . $row['price'] . '</div>
                </div>
            ';
        }
    }

    public function check_count() {
        $orders = parent::$conn->query("SELECT * FROM orders");
        if ($orders->num_rows > 0) {
            return parent::alert('success', '');
        }
        return parent::alert('warning', 'No made orders yet!');
    }

    public function order_count() {
        echo parent::$conn->query("SELECT * FROM orders")->num_rows;
    }

    public static function total_order() {
        $total = parent::$conn->query("SELECT SUM(price) AS total FROM orders");

        while ($row = $total->fetch_assoc()) {
            return $row['total'];
        }
    }

    public function insert_order() {
        extract($_POST);

        $insert = parent::$conn->query("
            INSERT INTO orders 
                (purchase, price) 
            VALUES 
                ('$product', '$price')
        ");

        if ($insert) {
            return parent::alert('success', 'Order has been placed!');
        }
        return parent::alert('error', 'Something went wrong!');
    }

    public function remove_order() {
        $remove = parent::$conn->query("DELETE FROM orders WHERE id = '{$_POST['id']}'");

        if ($remove) {
            return parent::alert('success', 'Order has been removed!');
        }
        return parent::alert('error', 'Something went wrong!');
    }

    public function cancel_orders() {
        $cancel = parent::$conn->query("DELETE FROM orders");

        if ($cancel) {
            return parent::alert('success', 'Orders has been cancelled!');
        }
        return parent::alert('error', 'Something went wrong!');
    }

    public static function list_orders() {
        return parent::$conn->query("SELECT * FROM orders");
    }

    public function receipt() {
        $value = $_POST['values'];

        $_SESSION['product'] = $value[0];
        $_SESSION['price'] = $value[1];

        return parent::alert('success', '');
    }
}