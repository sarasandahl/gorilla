<?php

    require 'connection.php';

    $sql = "SELECT * FROM monkeys";

    $statement = $pdo->query($sql);

    $monkeys = $statement->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($monkeys);

    // $benny = $monkeys[0];
    // echo "Name: {$benny['name']}";

    echo "<ul>";
    foreach($monkeys as $monkey){
        echo "<li>Name: {$monkey['name']}, Age: {$monkey['age']}, Color: {$monkey['color']}</li>";
    }
    echo "</li>";
