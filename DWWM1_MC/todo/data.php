<?php

    // require("./db.connexion.php");

    // $value = $_GET['todo-data'];



    // $query = "INSERT INTO todolist (todo) VALUES ('".$value."')";
    // $request_add_value = $conn->query($query);

    // $query_get_values = "SELECT todo FROM todolist";
    // $result = $conn->query($query_get_values);

    // While($rows = mysqli_fetch_array($result)){
    //     echo "<ul>";
    //     echo "<li>".$rows['todo']."</li>";
    //     echo "</ul>";

    // }
    // include 'db-connexion.php';

    // $val = $_GET['todo-data'];
    // $del = $_GET['todo-del'];
    
    // $req_text = 'INSERT INTO todolist (todo) VALUES ("'.$val.'");';
    // $req_sup = 'DELETE FROM todolist(todo) VALUES ("'.$del.'");';
    
    // print_r($req_text);
    // print_r($req_sup);
    // $req = mysqli_query($conn, $req_text);
    
    
    
    // header('Location: index.php');


    // require("./db.connexion.php");

    // $list_values = array();
    // $query = "SELECT * FROM todolist";
    // $result = $conn->query($query);
    // $copyResult = $conn->query($query);

    // while($rows = mysqli_fetch_object($result)){
    //     $list_values[] = $rows->todo;
    // }


    // if(isset($_GET)){

    //     if(isset($_GET['todo-data'])){


    //         $value = $_GET['todo-data'];

    //         echo $value;

    //         $query_add_value = "INSERT INTO todolist (todo) VALUES ('".$value."')";
    //         $request_add_value = $conn->query($query_add_value);
    //     }

        
    //     $list_size = count($list_values);        

    //     if(isset($_GET['id'])){
    
    //         $value = $_GET['id'];

    //         echo $value;

    //         $query_get_values = "DELETE FROM todolist WHERE id = ".$value;
    //         $conn->query($query_get_values);
    //     }
       
    // }


    // echo '<form method="get">';
    // echo "<ol>";

    // while($rows = mysqli_fetch_array($copyResult)){


    //     echo '<li><a href="http://localhost/todo/data.php?id='.$rows['id'].'">'.$rows['todo'].'</a></li>';


    //     //echo "<button type='submit' name='".$rows['id']."'><li>".$rows['todo']."</li></button>";
    // }
    // echo "</ol>";
    // echo '</form>';
    include 'db-connexion.php';
if (count($_GET) ==0){
    die("Aucune Variable transmise");
}

if ($_GET['action'] == 'delete') {

    // Supprimer une tâche de la base de données
    $id = $_GET['id'];
    $req_text = 'DELETE FROM todolist WHERE id='.$id.';';
    mysqli_query($conn, $req_text);

} else if ($_GET['action'] == 'add') {

    // Insérer une tâche dans la base de données
    $val = $_GET['todo-data'];
    $req_text = 'INSERT INTO todolist (todo) VALUES ("'.$val.'");';
    $req = mysqli_query($conn, $req_text);

} else if ($_GET['action'] == 'update') {
    // Modifier une tâche dans la base de données
    $ed= $_GET['edit'];
    $id= $_GET['id'];
    $req_text = "UPDATE todolist SET todo= '$ed' WHERE id=$id";
    $req = mysqli_query($conn, $req_text);

}

// echo '<pre>';
// print_r($_GET);
// echo '</pre>';

header('Location: index.php');

?>
