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
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\EntrarController;
use App\Http\Controllers\SiteController;

// Página Inicial
Route::get('/home_sistema', [SiteController::class, 'home_sistema'])->name('home_avaliador');

// Questionário e cadastro questionário
Route::get('/questionario', [SiteController::class,'questionario'])->name('questionario');
Route::post('/questionario', [SiteController::class,'storeQuestionario']);

// Página Pré Questionário
Route::get('/prequestionario', [SiteController::class,'preQuestionario'])->name('pre_questionario');
Route::post('/prequestionario', [SiteController::class,'postPreQuestionario']);

// Cadastro Admin
Route::get('/cadastroadmin', [SiteController::class,'cadastroadmin'])->name('cadastro_admin');

// Cadastro Avaliador
Route::get('/cadastroavaliador', [SiteController::class,'cadastroavaliador'])->name('cadastro_avaliador');
Route::post('/cadastroavaliador', [SiteController::class,'cadastroavaliador_bancodados']);

// Cadastro Itens Digitais
Route::get('/cadastroitemdigital', [SiteController::class,'cadastroitemdigital'])->name('cadastro_itemdigital');
Route::post('/cadastroitemdigital', [SiteController::class,'cadastroItemDigital_bancodados'])->name('upload_imagem');

// Cadastro Instituição
Route::get('/cadastroinstituicao', [SiteController::class,'cadastroinstituicao'])->name('cadastro_instituicao');
Route::post('/cadastroinstituicao', [SiteController::class,'cadastroinstituicao_bancodados']);

// Teste de Cadastrado
Route::get('/testecadastroavaliador', [SiteController::class,'testeCadastroAvaliador'])->name('teste_cadastro_avaliador');
Route::get('/testecadastroinstituicao', [SiteController::class, 'testeCadastroInstituicao'])->name('teste_cadastro_instituicao');
Route::get('/testecadastroitemdigital', [SiteController::class,'testeCadastroItensDigitais'])->name('teste_cadastro_item_digital');
Route::get('/testecadastroquestionario', [SiteController::class, 'testeCadastroQuestionario'])->name('testeCadastroQuestionario');

// Contato com Administrador
Route::get('/contatoadmin', [SiteController::class, 'contatoadmin'])->name('contato_admin');

// Contato com Avaliador
Route::get('/contatoavaliador', [SiteController::class, 'contatoavaliador'])->name('contato_avaliador');

// Autenticação
// Route::get('/', 'EntrarController::class,login')->name('login_sistema');
Route::get('/', [EntrarController::class, 'login'])->name('login_sistema');
Route::post('/', [EntrarController::class, 'entrar']);


// Registro de Login
Route::get('/registrar', [RegistroController::class,'create']);
Route::post('/registrar', [RegistroController::class,'store']);

// Logout
Route::get('/sair', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/');
});

// Autenticação padrão do laravel
Route::get('/home', [HomeController::class,'index'])->name('home');
Auth::routes();
