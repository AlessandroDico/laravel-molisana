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


// UN PRIMO MODO PER FILTRARE L'ARRAY E' CON LA FUNZIONE ARRAY_FILTER DI PHP

/*
    $longPasta = array_filter($arrayPasta, function($item){
        return $item['tipo'] == 'lunga';
    });
    $shortPasta = array_filter($arrayPasta, function($item){
        return $item['tipo'] == 'corta';
    });
    $veryShortPasta = array_filter($arrayPasta, function($item){
        return $item['tipo'] == 'cortissima';
    });
*/

// UN SECONDO MODO PER FILTRARE L'ARRRAY E' CON LE COLLECTION
// per usare questo metodo devo passare il mio array ad una funzione collect()
//creo quindi una nuova funzione che contiene la collect del mio array cosi da poter utilizzare su di esso tutte le funzioni legate alle collection

    $arrayPasta_collection = collect($arrayPasta);

    $longPasta = $arrayPasta_collection->where('tipo', 'lunga');
    $shortPasta = $arrayPasta_collection->where('tipo', 'corta');
    $veryShortPasta = $arrayPasta_collection->where('tipo', 'cortissima');

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

Route::get('prodotti/prodotto/{id}', function($id){
    $arrayPasta = config('pastaData');

    if (is_numeric($id) && $id >= 0 && $id < count($arrayPasta)) {
        $data = [
            'prodotto' => $arrayPasta[$id],
        ];
        return view('singoloProdotto', $data);
    } else {
        abort('404');
    }
})->name('singleItem');





















/**/
