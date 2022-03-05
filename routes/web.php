<?php

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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EntrarController;

// Página Inicial
Route::get('/home_sistema', 'SiteController@home_sistema')->name('home_avaliador');

// Questionário e cadastro questionário
Route::get('/questionario', 'SiteController@questionario')->name('questionario');
Route::post('/questionario', 'SiteController@storeQuestionario');

// Página Pré Questionário
Route::get('/prequestionario', 'SiteController@preQuestionario')->name('pre_questionario');
Route::post('/prequestionario', 'SiteController@postPreQuestionario');

// Cadastro Admin
Route::get('/cadastroadmin', 'SiteController@cadastroadmin')->name('cadastro_admin');

// Cadastro Avaliador
Route::get('/cadastroavaliador', 'SiteController@cadastroavaliador')->name('cadastro_avaliador');
Route::post('/cadastroavaliador', 'SiteController@cadastroavaliador_bancodados');

// Cadastro Itens Digitais
Route::get('/cadastroitemdigital', 'SiteController@cadastroitemdigital')->name('cadastro_itemdigital');
Route::post('/cadastroitemdigital', 'SiteController@cadastroItemDigital_bancodados');

// Cadastro Instituição
Route::get('/cadastroinstituicao', 'SiteController@cadastroinstituicao')->name('cadastro_instituicao');
Route::post('/cadastroinstituicao', 'SiteController@cadastroinstituicao_bancodados');

// Teste de Cadastrado
Route::get('/testecadastroavaliador', 'SiteController@testeCadastroAvaliador')->name('teste_cadastro_avaliador');
Route::get('/testecadastroinstituicao', 'SiteController@testeCadastroInstituicao')->name('teste_cadastro_instituicao');
Route::get('/testecadastroitemdigital', 'SiteController@testeCadastroItensDigitais')->name('teste_cadastro_item_digital');
Route::get('/testecadastroquestionario', 'SiteController@testeCadastroQuestionario')->name('testeCadastroQuestionario');

// Contato com Administrador
Route::get('/contatoadmin', 'SiteController@contatoadmin')->name('contato_admin');

// Contato com Avaliador
Route::get('/contatoavaliador', 'SiteController@contatoavaliador')->name('contato_avaliador');

// Autenticação
// Route::get('/', 'EntrarController@login')->name('login_sistema');
Route::get('/', [EntrarController::class, 'login'])->name('login_sistema');
Route::post('/', 'EntrarController@entrar');


// Registro de Login
Route::get('/registrar', 'RegistroController@create');
Route::post('/registrar', 'RegistroController@store');

// Logout
Route::get('/sair', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/');
});

// Autenticação padrão do laravel
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
