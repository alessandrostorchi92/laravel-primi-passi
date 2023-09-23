<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data = [

        'datiUtente' => [
            
            'Mario',
            'Rossi',
            '30'
        ]

    ];

    return view('home', $data);
});
