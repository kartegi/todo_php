<?php

    $task = $_POST['task'];

    if ($task == '')
    {
        echo '<a href="/" style="text-decoration:none">
                <h1 style="text-align:center">You have to add task</h1>
              </a>';
        exit();
    }

    require 'configDB.php';

    $sql = "INSERT INTO tasks(task) VALUES(:task)";
    $query = $pdo->prepare($sql);
    $query->execute(['task' => $task]);

    header('Location: /')

?>