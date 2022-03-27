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
    public function exibePaginaCadastroItemDigital()
    {
        return view('cadastroitemdigital');
    }

    public function exibeItemDigital()
    {
        $itemdigital = ItemDigital::all();
        return view('testecadastros.exibeitemdigital', compact('itemdigital'));
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
   
    











    public function cadastroavaliador_bancodados(AvaliadorFormRequest $request)
    {
        UsuarioAvaliador::create($request->all());
        $request->session()->flash('mensagem', "Usuário cadastrado com sucesso!");
        return redirect()->route('teste_cadastro_avaliador');
    }

    public function cadastroinstituicao_bancodados(InstituicaoFormRequest $request)
    {
        Instituicao::create($request->all());
        $request->session()->flash('mensagem', "Instituição cadastrada com sucesso!");
        return redirect()->route('teste_cadastro_instituicao');
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
        // $questionario = $request->session()->get('questionario');
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
        // return redirect()->route('testeCadastroQuestionario');
        return redirect()->route('questionario');
    }

    // Páginas do sistema
    public function testeCadastroQuestionario(Request $request)
    {
        $questionario = Questionario::all();
        return view('testecadastros.testecadastroquestionario', compact('questionario'));    
    }

    public function testeCadastroAvaliador(Request $request)
    {
        $usuarioavaliador = UsuarioAvaliador::all();
        $mensagem = $request->session()->get('mensagem');
        return view('testecadastros.testecadastroavaliador', compact('mensagem', 'usuarioavaliador'));
    }

    public function testeCadastroInstituicao(Request $request)
    {
        $instituicaoensino = Instituicao::all();
        $mensagem = $request->session()->get('mensagem');
        return view('testecadastros.testecadastroinstituicao', compact('mensagem', 'instituicaoensino'));
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

    public function cadastroavaliador()
    {
        return view('cadastroavaliador');
    }


    public function cadastroinstituicao()
    {
        return view('cadastroinstituicao');
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
