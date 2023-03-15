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
use App\Http\Controllers\MainController;


Route::controller(MainController::class)->group(function(){
    
    // Página Inicial
    Route::get('/home', 'home')->name('home_avaliador');
    
    // Tutorial
    Route::get('/tutorial', 'exibirTutorial')->name('tutorial');

    // Pré-Questionário
    Route::get('/prequestionario', 'preQuestionario')->name('pre_questionario');
    Route::post('/prequestionario', 'postPreQuestionario');
    
    // Relatório
    Route::get('/relatorio', 'exibeRelatorio')->name('exibeRelatorio');
    Route::get('/relatorio_download', 'storeRelatorio')->name('relatorioDownload');
    Route::get('/relatorio_ordenado', 'exibeRelatorioOrdenado')->name('exibeRelatorioOrdenado');
    Route::get('/relatorio_ordenado_nome', 'exibeRelatorioOrdenadoNome')->name('relatorioOrdenadoNome');
    Route::get('/relatorio_ordenado_data', 'exibeRelatorioOrdenadoData')->name('relatorioOrdenadoData');
    Route::post('/relatorio/remover/{id}', 'excluirRelatorio');
    
    // Questionário e cadastro questionário
    Route::get('/questionario', 'questionario')->name('questionario');
    Route::post('/questionario', 'storeQuestionario');
    
    // Cadastro Admin
    Route::get('/cadastroadmin', 'cadastroadmin')->name('cadastro_admin');
    
    // Cadastro Avaliador
    Route::get('/cadastroavaliador', 'exibirPaginaCadastroAvaliador')->name('cadastro_avaliador');
    Route::get('/avaliador', 'exibirAvaliador')->name('exibir_avaliador');
    Route::post('/cadastroavaliador', 'cadastrarAvaliador');
    Route::post('/avaliador/remover/{id}', 'excluirAvaliador');
    Route::get('/avaliador/editar/{id}', 'editarAvaliador')->name('editaravaliador');
    
    // Cadastro Itens Digitais
    Route::get('/cadastroitemdigital', 'exibirPaginaCadastroItemDigital')->name('cadastro_itemdigital');
    Route::get('/itemdigital', 'exibirItemDigital')->name('exibir_item_digital');
    Route::post('/cadastroitemdigital', 'cadastrarItemDigital')->name('cadastrar_item_digital');
    Route::post('/cadastroitemdigital/remover/{id}', 'excluirItemDigital');
    
    // Cadastro Instituição
    Route::get('/cadastroinstituicao', 'exibirPaginaCadastroinstituicao')->name('cadastro_instituicao');
    Route::get('/exibirinstituicao', 'exibirInstituicao')->name('exibir_instituicao');
    Route::post('/cadastroinstituicao', 'cadastrarInstituicao');
    Route::post('/cadastroinstituicao/remover/{id}', 'excluirInstituicao');
    
    // Teste de Cadastrado
    Route::get('/testecadastroquestionario',  'testeCadastroQuestionario')->name('testeCadastroQuestionario');
    
    // Contato com Administrador
    Route::get('/contatoadmin',  'contatoadmin')->name('contato_admin');
    
    // Contato com Avaliador
    Route::get('/contatoavaliador',  'contatoavaliador')->name('contato_avaliador');
});

Route::controller(EntrarController::class)->group(function(){
    
    // Autenticação
    Route::get('/', 'login')->name('login_sistema');
    Route::post('/', 'entrar');
});

Route::controller(RegistroController::class)->group(function(){
    
    // Registro de Login
    Route::get('/novo-login', 'exibirCadastroLogin')->name('cadastrar_novo_login');
    Route::post('/novo-login', 'cadastrarLogin');    
});

// Logout
Route::get('/sair', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/');
});

Auth::routes();
