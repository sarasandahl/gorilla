# gorilla
övningsuppgift i php med xampp

<?php

require 'connection.php';

//if($pdo){
    //här bygga vidare
//}

$sql = "SELECT * FROM monkeys";//hämtar ut alla kollumner och alla rader ur monkeys

//statement
$statement = $pdo->query($sql);

$monkeys = $statement->fetchALL(PDO::FETCH_ASSOC);//plockar ut ur statement, plocka ut all data i form av en associativ array

// var_dump($monkeys);

// $benny = $monkeys[0];
// echo "Name: {$benny['name']}";

echo "<ul>";
foreach($monkeys as $monkey){
    echo "<li>Name: {$monkey['name']}, Age: {$monkey['age']}, Color: {$monkey['color']}</li>";
}
echo "</li>";