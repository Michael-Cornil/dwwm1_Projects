<?php
include 'db-connexion.php';
?>
<!doctype html>
<html>
    <head>
    <style>
        body{
            background-color:gray;
        } 
        </style>
    </head>

    <body>
        

        <?php
        // print_r($_GET);
            $req = mysqli_query($conn, 'SELECT * FROM todolist WHERE id='.$_GET['id']);
        
            while($row = mysqli_fetch_object($req)) {
                // print_r($row);
                 
                echo '<form action="data.php" method="get">';
                echo '<input type="text" name="edit" value="'.$row->todo.'" >';
                echo '<input type="hidden" name="action" value="update">';
                echo '<input type="hidden" name="id" value="'.$_GET['id'].'">';
                echo '</form>';
            }
            
        ?>

    </body>

</html>