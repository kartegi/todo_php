<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
          crossorigin="anonymous">
    <title>HELLO</title>
</head>
<body>
    <div class="container">
        <h1>TO-DO</h1>
        <form action="add.php" method="post">
            <input type="text" name="task" id="task" placeholder="Add Task" class="form-control">
            <button type="submit" name="sendTask" class="btn btn-success">Send</button>
        </form>

        <?php

            
            require 'configDB.php';

            $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');

            echo '<ul>';
            while($row = $query->fetch(PDO::FETCH_OBJ)) {
                echo '<li>' . $row->task . '<a href="delete.php?id='.$row->id.'"><button class="btn btn-danger btn-sm">Delete</button></a></li>';
            }
            echo '</ul>'; 

        ?>

    </div>
</body>
</html>