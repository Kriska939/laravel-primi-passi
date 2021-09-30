<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // dichiaro qui cosa si deve vedere in homepage:

    $data = ['name' => 'Cristina',
             'text' => 'Testo Homepage Testo Homepage
             Testo Homepage Testo Homepage Testo Homepage',
            'lista_studenti' => [
                'Marco Rossi',
                'Filippo Neri',
                'Paolo Verdi',
                'Maria Bianchi'
            ]
        ];
    return view('home', $data);
});
