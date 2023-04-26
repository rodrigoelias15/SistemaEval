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
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // Item Digital
    public function exibirPaginaCadastroItemDigital()
    {
        $instituicaoCadastrada = Instituicao::all();        
        $existeInstituicao = DB::table('instituicao')->whereNotNull('id')->exists();
        return view('cadastroitemdigital', compact('instituicaoCadastrada', 'existeInstituicao'));
    }

    public function exibirTutorial()
    {
        return view('tutorial');
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
    
    public function editarAvaliador($id)
    {
        $usuarioAvaliador = UsuarioAvaliador::findOrFail($id);
        $existeInstituicao = DB::table('instituicao')->whereNotNull('id')->exists();
        $instituicaoCadastrada = Instituicao::all();
        return view('editaravaliador', ['usuarioAvaliador' => $usuarioAvaliador], compact('usuarioAvaliador', 'existeInstituicao', 'instituicaoCadastrada'));
    }

    public function exibirAvaliador()
    {
        $usuarioAvaliador = UsuarioAvaliador::all();
        $existeUsuarioAvaliador = DB::table('usuarioavaliador')->whereNotNull('id')->exists();
        return view('exibircadastros.exibiravaliador', compact('usuarioAvaliador', 'existeUsuarioAvaliador'));
    }
    
    public function exibirPaginaCadastroAvaliador()
    {
        $instituicaoCadastrada = Instituicao::all();
        $existeInstituicao = DB::table('instituicao')->whereNotNull('id')->exists();
        return view('cadastroavaliador', compact('instituicaoCadastrada', 'existeInstituicao'));
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
        $existeInstituicao = DB::table('instituicao')->whereNotNull('id')->exists();
        return view('exibircadastros.exibirinstituicao', compact('instituicaoensino', 'existeInstituicao'));
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
        $dadosItemDigital = ItemDigital::all();
        $dadosUsuarioAvaliador = UsuarioAvaliador::all();
        return view('prequestionario', compact('dadosUsuarioAvaliador', 'dadosItemDigital'));
    }
    
    public function postPreQuestionario(PreQuestionarioFormRequest $request)
    {
        $dadosItemDigital = $request->all();
        $questionario = new Questionario();
        $questionario->fill($dadosItemDigital);
        if(empty($dadosItemDigital)){
            $request->session()->put('dadosItemDigital', $dadosItemDigital);
        }else{
            $request->session()->forget($dadosItemDigital);
            $request->session()->put('dadosItemDigital', $dadosItemDigital);
        }
        return redirect()->route('questionario');
    }
        
    public function questionario(Request $request)
    {
        $dadosQuestionario = $request->session()->get('questionario');
        return view('questionario', compact('dadosQuestionario'));
    }
    
    public function storeQuestionario(QuestionarioFormRequest $request)
    {
        $dadosQuestionario = $request->session()->get('questionario');
        $novosDadosQuestionario = $request->all();
        $dadosQuestionario->fill($novosDadosQuestionario);
        $request->session()->put('dadosQuestionario', $dadosQuestionario);
        $dadosQuestionario->save();
        return redirect()->route('exibeRelatorio');
    }
    
    public function exibeRelatorio(Request $request)
    {
        $dadosQuestionario = $request->session()->get('questionario');
        return view('relatorio.exibeRelatorio', compact('dadosQuestionario'));
    }

    public function exibeRelatorioOrdenado()
    {
        $relatorioQuestionario = Questionario::all();
        return view('relatorio.exibeRelatorioOrdenado', compact('relatorioQuestionario'));
    }

    public function exibeRelatorioOrdenadoNome()
    {
        $relatorioQuestionario = Questionario::all();
        return view('relatorio.exibeRelatorioOrdenadoNome', compact('relatorioQuestionario'));    
    }

    public function exibeRelatorioOrdenadoData()
    {
        $relatorioQuestionario = Questionario::all();
        return view('relatorio.exibeRelatorioOrdenadoData', compact('relatorioQuestionario'));    
    }
    
    public function storeRelatorio(Request $request)
    {
        $questionario = $request->session()->get('questionario');
        return PDF::loadView('relatorio.relatorioDownload', compact('questionario'))->setOptions(['defaultFont' => 'sans-serif'])->stream('Relatorio.pdf');
    }

    public function excluirRelatorio(Request $request)
    {
        Questionario::destroy($request->id);
        return redirect()->back()->with('mensagem', 'Relatório excluído com sucesso!');
    }
    
    // Páginas do sistema
    public function testeCadastroQuestionario()
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
