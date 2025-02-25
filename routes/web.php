<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre-nos',function(){
    echo "Sobre nós";
});

Route::get('/contato',function(){
    echo "Contato";
});

Route::get('/login',function(){
    echo "Login";
});

Route::get('/cliente',function(){
    echo "Cliente";
});

Route::get('/fornecedo',function(){
    echo "fornecedor";
});

Route::get('/produto',function(){
    echo "Produtos";
});