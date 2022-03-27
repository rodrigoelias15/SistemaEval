<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvaliadorFormRequest;
use App\Http\Requests\InstituicaoFormRequest;
use App\Http\Requests\ItemDigitalFormRequest;
use App\Http\Requests\QuestionarioFormRequest;
use App\Questionario;
use App\UsuarioAvaliador;
use Illuminate\Http\Request;
use App\Instituicao;
use App\ItemDigital;

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
        return view('testecadastros.exibiritemdigital', compact('itemdigital'));
    }

    public function cadastrarItemDigital(ItemDigitalFormRequest $request)
    {
        $itemdigital = new ItemDigital();
        if($request->file('imagem_item_digital')){
            $file= $request->file('imagem_item_digital');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Imagens'), $filename);
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
        return view('testecadastros.exibiravaliador', compact('usuarioavaliador'));
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
        return view('testecadastros.exibirinstituicao', compact('instituicaoensino'));
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



    public function preQuestionario(Request $request)
    {
        $itemdigital = ItemDigital::all();
        $usuarioavaliador = UsuarioAvaliador::all();
        return view('prequestionario', compact('usuarioavaliador', 'itemdigital'));
    }

    public function postPreQuestionario(QuestionarioFormRequest $request)
    {
        $questionario = new Questionario();
        $dados = $request->all();
        $questionario->fill($dados);
        $request->session()->put('questionario', $questionario);
        return redirect()->route('questionario');
    }

    public function questionario(QuestionarioFormRequest $request)
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
        return redirect()->route('questionario');
    }

    // Páginas do sistema
    public function testeCadastroQuestionario(Request $request)
    {
        $questionario = Questionario::all();
        return view('testecadastros.testecadastroquestionario', compact('questionario'));    
    }

          
    public function login()
    {
        return view('login');
    }

    public function home_sistema()
    {
        return view('home_sistema');
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
