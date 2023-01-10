<?php

/* A API é um Endpoint de dados, ou seja, uma classe ou arquivo de rotas que retorna somente dados. 
*/

class Api
{

    function __construct()
    {
        //"How to display all php errors ?"

        define('INCLUDE_PATH', __DIR__);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        session_start();


        if (!empty($_GET['f'])) {
            $route = $_GET['f'];
            $this->$route();
        }
    }

    public function list_Animals_Template()
    {
        include_once './Services/animal_service.php';
        $animal_service = new Service;
        $info = json_encode($animal_service->listUsers());
        $this->response_json($info);
    }

    public function create_Animal_Template()
    {
        include_once './Services/animal_service.php';
        $animal_service = new Service;
        $info = $animal_service->createUsers();
        http_response_code(201);
        $this->response_json($info);

    }

    private function response_json($data)
    {
        header('content-Type: application/json');
        echo json_encode($data);
    }
}
new Api();
