<?php 

class Auth extends Connection {
    public function login() {
        extract($_POST);
        $sql = parent::$conn->query("SELECT * FROM admin WHERE (username = '{$username}' or email = '{$username}') AND password = '{$password}'");

        if ($sql->num_rows > 0) {
            foreach ($sql as $row) {
                $_SESSION['admin'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                return parent::alert('success', 'Login Success');
            }
        }
        return parent::alert('error', 'Invalid username or password');
    }

    public function logout() {
        unset($_SESSION['admin']);
        unset($_SESSION['id']);
        if (!isset($_SESSION['admin'])) {
            return parent::alert('success', 'Logout Success');
        }
        return parent::alert('error', 'Logout Failed');
    }

    public static function isAuth(){
        if (isset($_SESSION['admin'])) {
            return true;
        } else {
            return false;
        }
    }

    public static function profileInfo() {
        return parent::$conn->query("Select * from admin");
    }

    public static function hint(){
        $qry = parent::$conn->query("select hint from admin");

        foreach ($qry as $row) {
            return $row['hint'];
        }
    }

    public function ver_que() {
        $sql = parent::$conn->query("select * from admin where answer = '{$_POST['answer']}'");

        if ($sql->num_rows > 0) {
            return parent::alert('success', 'Answer is correct');
        }
        return parent::alert('error', 'Answer is incorrect');
    }

    public function change_pass() {
        extract($_POST);
        if ($newpassword !== $retypepassword) {
            return parent::alert('error', 'Password does not match');
        }

        $sql = parent::$conn->query("update admin set password = '{$newpassword}'");

        if ($sql) {
            return parent::alert('success', 'Password changed, your can now login again with your new password.');
        }
        return parent::alert('error', 'Password change failed');
    }

    public function saveProfile() {
        extract($_POST);
        $password = trim($password);

        if (empty($password)) {
            $query = parent::$conn->query("
                update admin
                set 
                    name = '{$name}',
                    username = '{$username}',
                    email = '{$email}'
            ");

            if ($query) {
                return parent::alert("success", "Profile Updated");
            }
            return parent::alert("error", "Profile Update Failed");
        } else {
            $query = parent::$conn->query("
                update admin
                set 
                    name = '{$name}',
                    username = '{$username}',
                    email = '{$email}',
                    password = '{$password}'
            ");

            if ($query) {
                return parent::alert("success", "Profile Updated");
            }
            return parent::alert("error", "Profile Update Failed");
        }
    }
}