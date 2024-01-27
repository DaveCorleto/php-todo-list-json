<?php

$todolist = [
    [
        "text" => "Fare la Spesa",
        "done" => "False"
    ],
    [
        "text" => "Studiare Php",
        "done" => "False"
    ],
    [
        "text" => "Fare Colazione",
        "done" => "False"
    ],
    [
        "text" => "Fare il Letto",
        "done" => "False"
    ],
    [
        "text" => "Cucinare il Pranzo",
        "done" => "False"
    ],
    [
        "text" => "Andare a Correre",
        "done" => "False"
    ],
    [
        "text" => "Buttare la Spazzatura",
        "done" => "False"
    ],
    [
        "text" => "Conquistare il Mondo",
        "done" => "False"
    ],
    [
        "text" => "Inventare una Pizza Dimagrante",
        "done" => "False"
    ],
    [
        "text" => "Suonare a Wembley",
        "done" => "False"
    ]
];


echo ("GET :");
var_dump ($_GET);
echo ("POST :");
var_dump ($_POST);

$newTask = (%_GET "text");
var_dump($newTask);

?>
