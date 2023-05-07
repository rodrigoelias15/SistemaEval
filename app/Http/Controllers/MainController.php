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
use Dompdf\Dompdf;
use Dompdf\Options;
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
        $request->session()->put('questionarioKey', $questionario);
        return redirect()->route('questionario');
    }
        
    public function questionario(Request $request)
    {
        $dadosQuestionario = $request->session()->get('questionarioKey');
        return view('questionario', compact('dadosQuestionario'));
    }
    
    public function postQuestionario(QuestionarioFormRequest $request)
    {
        $request->session()->put('keyIndicador1', $request->input('indicador1'));
        $request->session()->put('keyIndicador2', $request->input('indicador2'));
        $request->session()->put('keyIndicador3', $request->input('indicador3'));
        $request->session()->put('keyIndicador4', $request->input('indicador4'));
        $request->session()->put('keyIndicador5', $request->input('indicador5'));
        $request->session()->put('keyIndicador6', $request->input('indicador6'));
        $request->session()->put('keyIndicador7', $request->input('indicador7'));
        $request->session()->put('keyIndicador8', $request->input('indicador8'));
        $request->session()->put('keyIndicador9', $request->input('indicador9'));
        $request->session()->put('keyIndicador10', $request->input('indicador10'));
        $request->session()->put('keyIndicador11', $request->input('indicador11'));
        $request->session()->put('keyIndicador12', $request->input('indicador12'));
        $request->session()->put('keyIndicador13', $request->input('indicador13'));

        $dadosQuestionario = $request->session()->get('questionarioKey');
        $novosDadosQuestionario = $request->all();
        $dadosQuestionario->fill($novosDadosQuestionario);
        $request->session()->put('questionarioKey', $dadosQuestionario);
        $dadosQuestionario->save();
        return view('relatorio.exibeRelatorio', compact('dadosQuestionario'));
    }
    
    public function exibeRelatorio(Request $request)
    {
        $dadosQuestionario = $request->session()->get('questionarioKey');
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
    
    public function gerarRelatorio(Request $request)
    {
        $indicador1 = $request->session()->get('keyIndicador1');
        $indicador2 = $request->session()->get('keyIndicador2');
        $indicador3 = $request->session()->get('keyIndicador3');
        $indicador4 = $request->session()->get('keyIndicador4');
        $indicador5 = $request->session()->get('keyIndicador5');
        $indicador6 = $request->session()->get('keyIndicador6');
        $indicador7 = $request->session()->get('keyIndicador7');
        $indicador8 = $request->session()->get('keyIndicador8');
        $indicador9 = $request->session()->get('keyIndicador9');
        $indicador10 = $request->session()->get('keyIndicador10');
        $indicador11 = $request->session()->get('keyIndicador11');
        $indicador12 = $request->session()->get('keyIndicador12');
        $indicador13 = $request->session()->get('keyIndicador13');

        $dadosQuestionario = $request->session()->get('questionarioKey');
        $opcoes = new Options();
        $opcoes->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($opcoes);
        $paginaRelatorio = view('relatorio.relatorioDownload', compact('dadosQuestionario',
        'indicador1',
        'indicador2',
        'indicador3',
        'indicador4',
        'indicador5',
        'indicador6',
        'indicador7',
        'indicador8',
        'indicador9',
        'indicador10',
        'indicador11',
        'indicador12',
        'indicador13'))->render();
        $dompdf->loadHtml($paginaRelatorio);
        $dompdf->render();
        $dompdf->stream('Relatorio.pdf');
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
