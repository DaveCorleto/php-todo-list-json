<?php

// Specifico come deve essere codificato in modo che Javascript lo capisca 
header ('Content-Type: application/json');
header ('Access-Control-Allow-Headers: X-Requested-With');
// Autorizzo tutti i domini ad accedere al mio backend 
header ("Access-Control-Allow-Origin: *");

$jsonTasks = file_get_contents(__DIR__ . "/tasks.json");

$todolist = json_decode($jsonTasks, true);

$newTaskText = $_POST['text'];

// Definisco che i parametri della chiamata axios text e done andranno a costituire un oggetto (newTask) dell'array associativo 

$newTask = [
    "text" => $newTaskText,
    "done" => false
];

// Inserisco la variabile newtasks ottenuto tramite chiamata post axios nell'array todolist 
$todolist[] = $newTask;

$jsonTasks = json_encode($todolist);
file_put_contents(__DIR__ . "/tasks.json", $jsonTasks);
echo $jsonTasks;


?>
