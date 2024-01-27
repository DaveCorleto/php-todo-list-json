<?php
        // Specifico come deve essere codificato in modo che Javascript lo capisca 
        header ('Content-Type: application/json');
        // Autorizzo tutti i domini ad accedere al mio backend 
        header ("Access-Control-Allow-Origin: *");
        
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


        // COdifico l'array in Json 

    echo json_encode($todolist);

?>
