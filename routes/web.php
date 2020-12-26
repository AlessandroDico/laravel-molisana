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

// UNA COSA CHE SI PUO' FARE E' SPOSTARE I DATI (in questo caso il mio array di dati non modificato) IN CONFIG. CREARE UN FILE nomeCasuale.php E METTERE DENTRO I DATA E POI RICHIAMARLI QUA CON LA FUNZIONE CONFIG()



// PRIMA SOLUZIONE PER STAMPARE I PRODOTTI
Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/prodotti', function () {
    $arrayPasta = config('pastaData');
    // ora il mio array non è modificato quindi per modificarlo e creare dei sotto array per stampare in pagina filtro l'array principale

    $longPasta = array_filter($arrayPasta, function($item){
        return $item['tipo'] == 'lunga';
    });
    $shortPasta = array_filter($arrayPasta, function($item){
        return $item['tipo'] == 'corta';
    });
    $veryShortPasta = array_filter($arrayPasta, function($item){
        return $item['tipo'] == 'cortissima';
    });

    $data = [
        'shapes' => [
            'lunga' => $longPasta,
            'corta' => $shortPasta,
            'cortissima' => $veryShortPasta
        ]
    ];

    // dd($longPasta);

    return view('prodotti', $data);
})->name('product');


Route::get('/news', function(){
    return view('news');
})->name('news-about');
