

<?php 
    include 'db-connexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

    <div class="container">
        <form  action="data.php" method="get">
            <input type="text" id="todo-data" name="todo-data" />
            <input type="hidden" name="action" value="add" />
        </form>
        <table class="table">
                
            <?php
                $req = mysqli_query($conn, 'SELECT * FROM todolist ORDER BY todo;');

                while($row = mysqli_fetch_object($req)) {
                    
                    echo '<tr>';
                    echo "<td class='todo'>$row->todo</td>";
                    echo '<td class="delete"><a href="data.php?action=delete&id='.$row->id.'">supprimer</a></td>';
                    echo '<td class="edit"><a href="edit.php?id='.$row->id.'">edit</a></td>';
                    echo '</tr>';    
                }
                    
            ?>
            
        </table>
    </div> 
</body>
</html>