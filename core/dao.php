<?php

define('DATABASE', 'gestionaulas');
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');

define('DSN', "mysql:host=" . HOST . ";dbname=" . DATABASE);

// tablas

define('TABLE_USER', 'usuario');
define('COLUMN_LOGIN_USUARIO', 'usuario');
define('COLUMN_LOGIN_CONTRASENIA', 'password');


define('TABLE_AULA', 'aula');

define('TABLE_RESERVE', 'reserva');



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
        $sql = "SELECT usuario, password FROM ".TABLE_USER." WHERE usuario = '".$user."'  AND password = SHA2(\"".$password."\",512)";
        $stmt = $this->conn->query($sql);
        if ($stmt->rowCount() == 1) {
            return true;
        }
        return false;
    }

    /**
     * Métodos de gestión de aulas
     */

    function insertAula($nombre, $descripcion,$posicion,$estic,$pccount)
    {
        try {
            $sql = "INSERT INTO " . TABLE_AULA . " (nombre, descripcion, ubicacion, tic, numordenadores) VALUES ('" . $nombre . "','" . $descripcion . "','" . $posicion . "','" . $estic . "','" . $pccount . "')";
            $resultset = $this->conn->query($sql);
            return $resultset;
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    function deletetAula($nombre)
    {
        try {
            $sql = "DELETE FROM ".TABLE_AULA." WHERE nombre =".$nombre;
            $resultset = $this->conn->query($sql);
            return $resultset;
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    function  insertUser($user, $name, $pass, $email, $date){
        try {
            $sql = "INSERT INTO ".TABLE_USER. "(nombre, fnac, email, admin, usuario, password) VALUES ('".$name."','".$date."','".$email."',0,'".$user."',SHA2(\"".$pass."\",512))";
            if ($this->conn->exec($sql) === false){
                return false;
            }else {
                return true;
            }
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    function  insertReserve($usuario, $aula, $fecha, $hora){
        try {
            if($hora == 'all'){
                $sql = "SELECT * FROM ".TABLE_RESERVE." WHERE aula = '".$aula."' AND fecha = '".$fecha."'";

                $stmt = $this->conn->query($sql);
                if ($stmt->rowCount() != 0) {
                    return false;
                }
                else
                    $sql = "INSERT INTO ".TABLE_RESERVE. "(usuario, aula, fecha, tramo) VALUES ('".$usuario."','".$aula."','".$fecha."','8:15'),('".$usuario."','".$aula."','".$fecha."','9:15'),('".$usuario."','".$aula."','".$fecha."','10:15'),('".$usuario."','".$aula."','".$fecha."','11:45'),('".$usuario."','".$aula."','".$fecha."','12:45'),('".$usuario."','".$aula."','".$fecha."','13:45')";
            }
            else
                $sql = "INSERT INTO ".TABLE_RESERVE. "(usuario, aula, fecha, tramo) VALUES ('".$usuario."','".$aula."','".$fecha."','".$hora."')";
            if ($this->conn->exec($sql) === false){
                return false;
            }else {
                return true;
            }
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    function getAulas()
    {
        try {
            $sql = "SELECT nombre, descripcion, ubicacion, tic, numordenadores FROM " . TABLE_AULA;
            $resultset = $this->conn->query($sql);
            return $resultset;
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }


    function getID($user)
    {
        try {
            $sql = "SELECT id FROM " . TABLE_USER . " WHERE usuario = '" . $user . "'";
            $resultset = $this->conn->query($sql);
            $listEstudiantes=$resultset->fetchAll();

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
