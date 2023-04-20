<?php

    $tasks = [
        [
            'testo' => 'Cucinare',
            'done' => 'True',
        ],
        [
            'testo' => 'Apparecchiare',
            'done' => 'True',
        ],
        [
            'testo' => 'Mangiare',
            'done' => 'True',
        ],
        [
            'testo' => 'Bere',
            'done' => 'True',
        ],
    ];


    header('Content-Type: application/json');
    echo json_encode($tasks);