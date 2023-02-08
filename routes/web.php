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
    return view('welcome');
});
//rotas cpm parametros
Route::get("/testeNome/{nome?}", function($nome=null){
    if(isset($nome))
        return "Ola, seja bem-vindo, $nome!";
    return "Você não digitou nenhum nome!";
});
//rotas com regras - regex
Route::get("/rotacomregras/{nome}/{n}", function($nome, $n){
    for($i=0;$i<$n;$i++)
        echo "<br/>$nome<br/>";
})->where('nome', '[A-Za-z]+')
  ->where('n','[0-9]+');
  //rotas agrupadas
Route::prefix("/app")->group(function(){
    Route::get('/user',function(){
        //return redirect()->route('profile');
        return view("user");
    })->name("user");
    Route::get('/profile', function(){
        return view('profile');
    })->name('profile');
});
