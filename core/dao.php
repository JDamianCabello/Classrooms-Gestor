<?php

define('DATABASE', 'gestionaulas');
define('HOST', 'localhost');
define('USER', 'www-data');
define('PASS', 'usuario');

define('DSN', "mysql:host=" . HOST . ";dbname=" . DATABASE);

// tablas

define('TABLE_USER', 'usuario');
define('COLUMN_LOGIN_USUARIO', 'usuario');
define('COLUMN_LOGIN_CONTRASENIA', 'password');


define('TABLE_AULA', 'aula');



class Dao
{
    private $conn;
    public $error;

    function __construct()
    {
        try {
            $this->conn = new PDO(DSN, USER, PASS);
        } catch (PDOException $e) {
            $this->error = "Database conection error: " . $e->getMessage();
        }
    }

    function isConected()
    {
        return isset($this->conn);
    }

    function authenticate($user, $password)
    {
        if (!isset($user, $password)) {
            return false;
        }
        $sql = "SELECT * FROM " . TABLE_USER . " WHERE " . COLUMN_LOGIN_USUARIO . "='$user' AND " . COLUMN_LOGIN_CONTRASENIA . "=SHA2('$password', 512)";
        $stmt = $this->conn->query($sql);

        if (($stmt->rowCount() == 1)) {
            return true;
        }
        return false;
    }

    /**
     * Métodos de gestión de aulas
     */

    function insertAula($nomcorto, $nombreAula, $posicion, $estic, $pccount)
    {
        try {
            $sql = "INSERT INTO " . TABLE_AULA . " (nombrecorto, nombre, ubicacion, tic, numordenadores) VALUES ('" . $nomcorto . "','" . $nombreAula . "','" . $posicion . "','" . $estic . "','" . $pccount . "')";
            $resultset = $this->conn->query($sql);
            return $resultset;
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    function  insertUser($user, $username, $pass, $email, $date){
        try {
            $sql = "INSERT INTO " . TABLE_USER . " ('nombre', 'fnac', 'email', 'admin', 'usuario', 'password') VALUES ('" . $user . "','" . $date . "','" . $email ."','0','".$username."','".$pass."')";
            if(exec($sql))
                return true;
             else
                 return false;
            //$this->conn->query($sql);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    function getAulas()
    {
        try {
            $sql = "SELECT nombrecorto, nombre, ubicacion, tic, numordenadores FROM " . TABLE_AULA;
            $resultset = $this->conn->query($sql);
            return $resultset;
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    function getDBScript($rutaDescarga)
    {
        try {
            $sql = "mysqldump -u ".USER." -p".PASS." ".DATABASE." > ".$rutaDescarga;
            $resultset = $this->conn->query($sql);
            return $resultset;
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }
}
