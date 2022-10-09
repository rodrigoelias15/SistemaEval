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

// Pré-Questionário
Route::get('/prequestionario', [SiteController::class,'preQuestionario'])->name('pre_questionario');
Route::post('/prequestionario', [SiteController::class,'postPreQuestionario']);

// Relatório
Route::get('/relatoriopdf', [SiteController::class,'storeRelatorio'])->name('relatoriopdf');
Route::get('/relatorio', [SiteController::class,'exibeRelatorio'])->name('relatorio');
Route::get('/relatorio_ordenado_nome', [SiteController::class,'exibeRelatorioOrdenadoNome'])->name('relatorioOrdenadoNome');
Route::get('/relatorio_ordenado_data', [SiteController::class,'exibeRelatorioOrdenadoData'])->name('relatorioOrdenadoData');
Route::post('/relatorio/remover/{id}', [SiteController::class,'excluirRelatorio']);

// Questionário e cadastro questionário
Route::get('/questionario', [SiteController::class,'questionario'])->name('questionario');
Route::post('/questionario', [SiteController::class,'storeQuestionario']);

// Cadastro Admin
Route::get('/cadastroadmin', [SiteController::class,'cadastroadmin'])->name('cadastro_admin');

// Cadastro Avaliador
Route::get('/cadastroavaliador', [SiteController::class,'exibirPaginaCadastroAvaliador'])->name('cadastro_avaliador');
Route::get('/avaliador', [SiteController::class,'exibirAvaliador'])->name('exibir_avaliador');
Route::post('/cadastroavaliador', [SiteController::class,'cadastrarAvaliador']);
Route::post('/avaliador/remover/{id}', [SiteController::class,'excluirAvaliador']);

// Cadastro Itens Digitais
Route::get('/cadastroitemdigital', [SiteController::class,'exibirPaginaCadastroItemDigital'])->name('cadastro_itemdigital');
Route::get('/itemdigital', [SiteController::class,'exibirItemDigital'])->name('exibir_item_digital');
Route::post('/cadastroitemdigital', [SiteController::class,'cadastrarItemDigital'])->name('cadastrar_item_digital');
Route::post('/cadastroitemdigital/remover/{id}', [SiteController::class,'excluirItemDigital']);

// Cadastro Instituição
Route::get('/cadastroinstituicao', [SiteController::class,'exibirPaginaCadastroinstituicao'])->name('cadastro_instituicao');
Route::get('/instituicao', [SiteController::class, 'exibirInstituicao'])->name('exibir_instituicao');
Route::post('/cadastroinstituicao', [SiteController::class,'cadastrarInstituicao']);
Route::post('/cadastroinstituicao/remover/{id}', [SiteController::class,'excluirInstituicao']);

// Teste de Cadastrado
Route::get('/testecadastroquestionario', [SiteController::class, 'testeCadastroQuestionario'])->name('testeCadastroQuestionario');

// Contato com Administrador
Route::get('/contatoadmin', [SiteController::class, 'contatoadmin'])->name('contato_admin');

// Contato com Avaliador
Route::get('/contatoavaliador', [SiteController::class, 'contatoavaliador'])->name('contato_avaliador');

// Autenticação
Route::get('/', [EntrarController::class, 'login'])->name('login_sistema');
Route::post('/', [EntrarController::class, 'entrar']);


// Registro de Login
Route::get('/registrar', [RegistroController::class,'create'])->name('registrar_novo_usuario');
Route::post('/registrar', [RegistroController::class,'store']);

// Logout
Route::get('/sair', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/');
});

// Autenticação padrão do laravel
// Route::get('/home', [HomeController::class,'index'])->name('home');
Auth::routes();
