<?php
include_once('dao.php');


class App {
    private $dao;
    function __construct()
    {
        $this->dao = new Dao();
    }

    static function print_head() {
        include('../view/head.php');
    }

    static function print_listAulas() {
        include('../view/cabezeraListarAulas.php');
    }

    static function print_hamburguer() {
        include('../view/hamburguernav.php');
    }

    static function printNav(){
        include('../view/hamburguernav.php');
    }

    static function openForm(){
        //include('../view/mainnav.php');
        include('../view/openformListaulas.php');
    }

    static function printExternalNav(){
        include('../view/externalnav.php');
    }

    static function printAbout(){
        include('../view/acercaDe.php');
    }

    static function print_footer() {
        include('../view/footer.php');
    }

    static function print_registerForm(){
        include('../view/registerForm.php');
    }

    static function print_signature(){
        include('../view/signature.php');
    }

    static function print_createClassForm(){
        include('../view/anadirAulaForm.php');
    }

    static function print_reserveForm(){
        include('../view/reservaForm.php');
    }

    function getDao() {
        return $this->dao;
    }

    function saveSession($user){
        $_SESSION['user'] = $user;
        $_SESSION['admin']= $this->dao->getUserPrivileges();
    }

    function getReservas(){
        return $this->dao->getReservas();
    }

    function validateSesion(){
        session_start();
        if(!$this->isLogged())
            $this->showLogin();
    }

    function validateSesionLogin(){
        session_start();
        if(!$this->isLogged())
            $this->showAula();
    }

    function isLogged(){
        return isset($_SESSION['user']);
    }

    function showLogin(){
        header('Location: login.php');
    }

    function showLobby(){
        header('Location: lobby.php');
    }

    function invalidateSession(){
        session_start();
        if($this->isLogged()){
            unset($_SESSION['user']);
            session_destroy();
            $this->showLogin();
        }
    }

    function refreshPage(){
        echo "<meta http-equiv='refresh' content='0'>";
    }



    /**
     * Métodos de gestión de aulas
     */

    function insertAula($nombre, $descripcion,$posicion,$estic,$pccount){
        return $this->dao->insertAula($nombre, $descripcion,$posicion,$estic,$pccount);
    }

    function deletetAula($nombre){
        return $this->dao->deletetAula($nombre);
    }

    function getAulas(){
        return $this->dao->getAulas();
    }

    function getDBScript($rutaDescarga){
        return $this->dao->getDBScript($rutaDescarga);
    }

    function  insertUser($user,$name, $pass, $email, $date){
        return $this->dao->insertUser($user, $name, $pass, $email, $date);
    }

    function insertReserve($usuario, $aula, $fecha, $hora, $motivo){
        return $this->dao->insertReserve($usuario, $aula, $fecha, $hora, $motivo);
    }

    function habilitarClase($nombre){
        return $this->dao->habilitarClase($nombre);
    }

    function deshabilitarClase($nombre){
        return $this->dao->deshabilitarClase($nombre);
    }

    function deletetreserva($numreserva){
        return $this->dao->deletetreserva($numreserva);
    }



}