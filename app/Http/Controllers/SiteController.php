<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvaliadorFormRequest;
use App\Http\Requests\InstituicaoFormRequest;
use App\Http\Requests\ItemDigitalFormRequest;
use App\Http\Requests\PreQuestionarioFormRequest;
use App\Http\Requests\QuestionarioFormRequest;
use App\Questionario;
use App\UsuarioAvaliador;
use Illuminate\Http\Request;
use App\Instituicao;
use App\ItemDigital;
use Barryvdh\DomPDF\Facade\Pdf;

class SiteController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // Item Digital
    public function exibirPaginaCadastroItemDigital()
    {
        return view('cadastroitemdigital');
    }

    public function exibirItemDigital()
    {
        $itemdigital = ItemDigital::all();     
        return view('exibircadastros.exibiritemdigital', compact('itemdigital'));
    }
           
    public function cadastrarItemDigital(ItemDigitalFormRequest $request)
    {
        $itemdigital = new ItemDigital();
        if($request->file('imagem_item_digital')){
            $file= $request->file('imagem_item_digital');
            $filename= date('YmdHi').$file->getClientOriginalName();
            if($_SERVER['SERVER_NAME'] == "127.0.0.1"){
                $file-> move(public_path('Imagens'), $filename);
            }else{
                $file-> move(base_path('Imagens'), $filename);
            }
            $itemdigital['imagem_item_digital']= $filename;
        }
        $data = $request->except('imagem_item_digital');
        $itemdigital->fill($data);
        $itemdigital->save();
        return redirect()->back()->with('mensagem', 'Item Digital cadastrado com sucesso!');
    }
    
    public function excluirItemDigital(Request $request)
    {
        ItemDigital::destroy($request->id);
        return redirect()->back()->with('mensagem', 'Item Digital excluído com sucesso!');
    }
    
    
    // Avaliador
    public function cadastrarAvaliador(AvaliadorFormRequest $request)
    {
        UsuarioAvaliador::create($request->all());
        return redirect()->back()->with('mensagem', 'Avaliador cadastrado com sucesso!');
    }
    
    public function exibirAvaliador(Request $request)
    {
        $usuarioavaliador = UsuarioAvaliador::all();
        return view('exibircadastros.exibiravaliador', compact('usuarioavaliador'));
    }
    
    public function exibirPaginaCadastroAvaliador()
    {
        return view('cadastroavaliador');
    }
    
    public function excluirAvaliador(Request $request)
    {
        UsuarioAvaliador::destroy($request->id);
        return redirect()->back()->with('mensagem', 'Avaliador excluído com sucesso!');
    }
    
        
    // Instituição
    public function cadastrarInstituicao(InstituicaoFormRequest $request)
    {
        Instituicao::create($request->all());
        return redirect()->back()->with('mensagem', 'Instituição cadastrada com sucesso!');
    }
    
    public function exibirInstituicao(Request $request)
    {
        $instituicaoensino = Instituicao::all();
        return view('exibircadastros.exibirinstituicao', compact('instituicaoensino'));
    }

    public function exibirPaginaCadastroInstituicao()
    {
        return view('cadastroinstituicao');
    }

    public function excluirInstituicao(Request $request)
    {
        Instituicao::destroy($request->id);
        return redirect()->back()->with('mensagem', 'Instituição excluída com sucesso!');
    }


    // Questionario
    public function preQuestionario()
    {
        $itemdigital = ItemDigital::all();
        $usuarioavaliador = UsuarioAvaliador::all();
        return view('prequestionario', compact('usuarioavaliador', 'itemdigital'));
    }
    
    public function postPreQuestionario(PreQuestionarioFormRequest $request)
    {
        $questionario = new Questionario();
        $dados = $request->all();
        $questionario->fill($dados);
        if(empty($request->session()->get('questionario'))){
            $request->session()->put('questionario', $questionario);
        }else{
            $request->session()->forget($request->all());
            $request->session()->put('questionario', $questionario);
        }
        // return view('questionario', compact('questionario'));
        return redirect()->route('questionario');
    }
        
    public function questionario(Request $request)
    {
        $questionario = $request->session()->get('questionario');
        return view('questionario', compact('questionario'));
    }
    
    public function storeQuestionario(QuestionarioFormRequest $request)
    {
        $questionario = $request->session()->get('questionario');
        $dados = $request->all();
        $questionario->fill($dados);
        $request->session()->put('questionario', $questionario);
        $questionario->save();
        return redirect()->route('relatoriopdf');
    }

    public function exibeRelatorio(Request $request)
    {
        $relatorio_questionario = Questionario::all();
        return view('relatorio.exibirelatorio', compact('relatorio_questionario'));
    }

    public function exibeRelatorioOrdenadoNome(Request $request)
    {
        $relatorio_questionario = Questionario::all();
        return view('relatorio.exibeRelatorioOrdenadoNome', compact('relatorio_questionario'));    
    }

    public function exibeRelatorioOrdenadoData(Request $request)
    {
        $relatorio_questionario = Questionario::all();
        return view('relatorio.exibeRelatorioOrdenadoData', compact('relatorio_questionario'));    
    }
    
    public function storeRelatorio(Request $request)
    {
        $questionario = $request->session()->get('questionario');        
        return PDF::loadView('relatorio', compact('questionario'))->setOptions(['defaultFont' => 'sans-serif'])->stream('relatorio.pdf');
    }

    public function excluirRelatorio(Request $request)
    {
        Questionario::destroy($request->id);
        return redirect()->back()->with('mensagem', 'Relatório excluído com sucesso!');
    }
    
    // Páginas do sistema
    public function testeCadastroQuestionario(Request $request)
    {
        $questionario = Questionario::all();
        return view('exibircadastros.testecadastroquestionario', compact('questionario'));    
    }
          
    public function login()
    {
        return view('login');
    }

    public function home()
    {
        return view('home');
    }

    // Cadastro
    public function cadastroadmin()
    {
        return view('cadastroadmin');
    }


    // Contato
    public function contatoadmin()
    {
        return view('contatoadmin');
    }

    public function contatoavaliador()
    {
        return view('contatoavaliador');
    }
}
