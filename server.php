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
            'id' => end($tasks)['id'] + 1  ,
        ];
        $json_string = json_encode($tasks);
        file_put_contents('database.json', $json_string);
    }

    if (isset($_POST['index'])) {
        $tasks[$_POST['index']]['done'] = !$tasks[$_POST['index']]['done'];

        $json_string = json_encode($tasks);
        file_put_contents('database.json', $json_string);

    }

    if (isset($_POST['delete'])) {
        array_splice($tasks, $_POST['delete'], 1);
        
        $json_string = json_encode($tasks);
        file_put_contents('database.json', $json_string);

    }


    header('Content-Type: application/json');
    echo json_encode($tasks);
