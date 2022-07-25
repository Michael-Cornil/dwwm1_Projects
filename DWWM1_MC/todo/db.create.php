<?php

    // require("./db.connexion.php");

    // $query_tables = "SHOW TABLES LIKE 'todolist";

    // $result_tables = $conn->query($query_tables);

    
    // if($result_tables === false ){

    //     $query_create_table = "CREATE TABLE todolist (id INT AUTO_INCREMENT PRIMARY KEY UNIQUE, todo VARCHAR(191) )";
    //     $request_create_table = $conn->query($query_create_table);

    // }

    // include 'db-connexion.php';

    // $req = mysqli_query($conn, 'CREATE TABLE todolist (id int primary key NOT NULL AUTO_INCREMENT, todo varchar(191));');
    
    // print_r($req);
    

include 'db-connexion.php';

$req = mysqli_query($conn, 'CREATE IF NOT EXISTS TABLE todolist (id int primary key NOT NULL AUTO_INCREMENT, todo varchar(191));');

print_r($req);
?>