<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobreNos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get("/login", function(){ return 'Login'; })->name("site.login");



// app
Route::prefix('/app')->group(function() {
    Route::get("/clientes", function(){ return 'Clientes'; })->name("app.clientes");
    Route::get("/fornecedores", "FornecedorController@index")->name("app.fornecedores");
    Route::get("/produtos", function(){ return 'produtos'; })->name("app.produtos");
});


Route::get('rota1', function(){
    echo "rota 1";
})->name("site.rota1");



// redirecionamento com metodo redirect dentro do controlador
/*
Route::get('rota2', function(){
    echo "Rota 2";
    return redirect()->route('site.rota1');
})->name("site.rota2");

// // redirecionamento com metodo redirect puro
//Route::redirect('/rota2', 'rota1');
*/

Route::fallback(function(){
    echo "a Rota acessada não existe, clique para retornar a página inicial <a href='". route('site.index') ."'>Clique aqui</a>";
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');