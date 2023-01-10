<?php

/*index é aonde acontece o roteamento das URLS. */


class Router
{

    function __construct()
    {
        define('INCLUDE_PATH', __DIR__);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        session_start();

        include_once './Core/connection.php';
        include_once './Services/animal_service.php';

        if (!empty($_GET['f'])) {
            $route = $_GET['f'];
            $this->$route();
        } else $this->list_Animals_Index();

        //Why should i use $this->list_Animals_Index instead of just list_Animals_Index()?
        /*A: Because inside the __construct, list_Animals_Index() doesn't exist. When i use "this", i'm 
    referring to the current class (Router) and therefore list_Animals_Index() is found. */
    }

    public function list_Animals_Index()
    {   
        header('content-type: text/html;charset=UTF-8');
        include_once './Templates/list.php';
    }

    public function create_Animals_index() {
        header('content-type: text/html;charset=UTF-8');
        include_once './Templates/create.php';
    }

}

new Router();
