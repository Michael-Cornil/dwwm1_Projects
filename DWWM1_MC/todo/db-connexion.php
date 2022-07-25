<?php

// $host = '127.0.0.1';
// $usernames = "root";


// $conn = new mysqli($host, $usernames);


// if ($conn){
//     if ($conn->connect_error){
//         die("Connexion failed" . $conn->connect_error);
//     }
// }

// mysqli_select_db($conn, 'todo');


// echo "Connexion successfully";

// echo '<br>';


$conn = mysqli_connect('localhost', 'root', '', 'exercice');

if (!$conn) {
    die('Erreur de connexion');
}
