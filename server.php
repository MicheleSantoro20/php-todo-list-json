<?php

    $tasks = [
        [
            'testo' => 'Cucinare',
            'done' => true,
        ],
        [
            'testo' => 'Apparecchiare',
            'done' => true,
        ],
        [
            'testo' => 'Mangiare',
            'done' => false,
        ],
        [
            'testo' => 'Bere',
            'done' => true,
        ],
    ];


    if (isset($_POST['addedTask'])) {
        $todo = [
            'testo' => $_POST['addedTask'],
            'done' => false,
        ];
        array_push($tasks, $todo);
    }

    header('Content-Type: application/json');
    echo json_encode($tasks);