<?php

use Illuminate\Support\Facades\Route;

//importa o controller para ser usando na rota abaixo
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
//salva os dados no banco
Route::post('/events', [EventController::class, 'store']);
//exibe o formulário
Route::get('/events/create', [EventController::class, 'create']);
//rota para retornar um registro específico
Route::get('/events/{id}', [EventController::class, 'show']);


/** a rota abaixo não está usando controller */
/*Route::get('/', function () {
    $nome = "Rangel";
    $idade = 40;
    $profissao = "Programador";
    $arr = [10,20,30,40,50];
    $arr2 = ["jose", "maria"];
    return view('welcome', [
                                'nome' => $nome, 
                                'idade' => $idade, 
                                'profissao' => $profissao,
                                'arr' => $arr, 
                                'arr2' => $arr2,
                            ]);
});*/


/** a rota abaixo não está usando controller */
Route::get('/contact', function () {

    return view('contact');
});

/** a rota abaixo não está usando controller, /products ou  /products?search=camisa */
Route::get('/products', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

/** a rota abaixo não está usando controller, rota com passagem de parâmetro, se não houver nenhum parâmetro, adicional null, e é feito um tratamento na view */
Route::get('/product/{id}', function ($id = null) {

    return view('product', ['id' => $id]);
});
