<?php

/* Na Service se faz a conexão ao banco de dados, já que para toda e qualquer operação 
(CRUDE) é necessária a conexão ao db. Fora a cnn, somente operações CRUDE pertencem aqui.  */

Class Service{

   protected $mysqli_service;

    function __construct()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        include_once './Core/connection.php';

        $credentials = [
            'hostname' => 'localhost',
            'username' => 'root',
            'password' => 3005,
            'database' => 'animals',
            'port' => 3306
        ];

        $this->mysqli_service = new Connection($credentials);
        
    }

    function listUsers() {
        $query = 'SELECT * FROM animals.animal_table';
            $currentUsers = $this->mysqli_service->givenQuery($query);
            return $currentUsers; 
    }

    function createUsers(){
        $createQuery = "INSERT INTO `animals`.`animal_table`
     (`animal_table_species`, `animal_table_size`, `animal_table_type`, `animal_table_color`)
      VALUES ('" . $_POST['input_species'] . "', '" . $_POST['input_size'] . "', '" . $_POST['input_type'] .
            "', '" . $_POST['input_color'] . "');";
            $this->mysqli_service->givenQuery($createQuery);
    }
}

new Service();