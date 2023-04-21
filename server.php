<?php
    if (file_exists('database.json')) {
        $getDatabase= file_get_contents('database.json');
        $tasks=json_decode($getDatabase, true);
    } else {
        $tasks = [];
    }



    if (isset($_POST['addedTask']) && $_POST['addedTask'] != '') {
        $tasks[] = [
            'testo' => $_POST['addedTask'],
            'done' => false,
        ];
        
        $json_string = json_encode($tasks);
        file_put_contents('database.json', $json_string);

    }

    header('Content-Type: application/json');
    echo json_encode($tasks);
