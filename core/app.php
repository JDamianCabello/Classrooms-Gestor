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

    static function print_listAulas_Buttons()
    {
        include('../view/listarAulas_buttons.php');
    }

    static function print_head_NoBootsrap() {
        include('../view/head_noboostrap.php');
    }


    static function printNav(){
        include('../view/mainnav.php');
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

    static function print_createClassForm(){
        include('../view/anadirAula.php');
    }

    function getDao() {
        return $this->dao;
    }

    function saveSession($user){
        $_SESSION['user'] = $user;
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
        if($this->isLogged()){
            unset($_SESSION['user']);
            session_destroy();
            $this->showLogin();
        }
    }



    /**
     * Métodos de gestión de aulas
     */

    function insertAula($nomcorto, $nombreAula,$posicion,$estic,$pccount){
        return $this->dao->insertAula($nomcorto, $nombreAula,$posicion,$estic,$pccount);
    }

    function getAulas(){
        return $this->dao->getAulas();
    }

    function getDBScript($rutaDescarga){
        return $this->dao->getDBScript($rutaDescarga);
    }

    function  insertUser($user,$username, $pass, $email, $date){
        return $this->dao->insertUser($user, $username, $pass, $email, $date);
    }


}