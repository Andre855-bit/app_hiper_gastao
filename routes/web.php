<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'sobre-nos']);

Route::get('/contato',[\App\Http\Controllers\ContatoContreoller::class,'contato']);

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