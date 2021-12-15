<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EventController;

Route::get('/', [Eventcontroller::class, 'view'] );
Route::get('/events/create', [Eventcontroller::class, 'create'] );


Route::get('/produtos', function(){
   
    $busca = request('search');

    return view('product', ['busca' => $busca]);

});

Route::get('/contatos', function(){
    return view('contact');
});

Route::get('/produtos_testes/{id?}', function($id = null){
    return view('product', ['id' => $id]);
});