@extends("layouts.layout")

@section("titulo_pagina")
Cadastro de Itens Digitais
@endsection

@section("content")

<style>
    body{
        background-color: #FCD34D; 
    }
    form {
        padding: 1.5rem; 
        background-color: #93C5FD; 
        border-radius: 0.75rem; 
        border-width: 1px; 
        border-color: #E5E7EB; 
    }
    input {
        display: flex; 
        padding: 1.5rem; 
        background-color: #DBEAFE; 
        border-radius: 0.75rem; 
        border-width: 1px; 
        border-color: #E5E7EB;
    }
    button {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem; 
        padding-left: 2.5rem;
        padding-right: 2.5rem; 
        background-color: #1D4ED8; 
        color: #ffffff; 
        font-size: 0.75rem;
        line-height: 1rem; 
        font-weight: 600; 
        text-transform: uppercase; 
        border-radius: 1rem; 
    }
    button:hover{
        background-color: #1E3A8A;
    }
    .aviso {
        font-size: 0.82rem;
        border-width: 1.5rem; 
        border-radius: 1.5rem;
        color: #ffffff;
        background-color: #1E3A8A;
        padding: 0.3rem; 
        font-weight: 600; 
        margin-bottom: 1.0rem;
    }
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
</style>

<div class="row justify-content-center"
    style='background-color: #FEF3C7'
>
    <div class="col-sm-8 col-md-5">

        <div class="logo my-3">
            <img class="img-fluid center" src="img/caedlogo.png" alt="Logo Caed">
        </div>
        
        @if(session()->has('mensagem'))
            <div class="alert alert-success text-center">
                {{ session()->get('mensagem') }}
            </div>
        @endif
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        
        <form method="post" class="form-group" action="{{route('cadastrar_item_digital')}}" enctype="multipart/form-data">
            @csrf
            <div class='center aviso'>
                -Items com * são obrigatórios-
            </div>
            <div class="form-group">
                <label for="inputItemDigital">
                    *Nome do Item Digital*
                </label>
                <input class="form-control" 
                    type="text" 
                    id="inputItemDigital" 
                    name="nome_item_digital"
                    value="{{ old('nome_item_digital') }}"
                    placeholder="Nome identificador do item"
                    required
                >
            </div>

            <div class="form-group">
                <label for="inputAreaDisciplina">
                    *Área/Disciplina*
                </label>
                <input class="form-control" 
                    type="text" 
                    id="inputAreaDisciplina"
                    name="area_item_digital"
                    value="{{ old('area_item_digital') }}"
                    placeholder="Linguas, Matemática, Ciências..."
                    required
                >
            </div>

            <div class="form-group form-row">
                <div class="col-md-7">
                    <div class='mb-2'>
                        *Grau de Escolaridade*
                    </div>
                    <select class="form-control"
                        name="escolaridade_item_digital"
                        id="escolaridade1"
                        value="{{ old('escolaridade_item_digital') }}"
                        type="text"
                        placeholder="Escolher"
                        required>
                    >
                        <option>Ensino Fundamental</option>
                        <option>Ensino Médio</option>
                        <option>Ensino Superior</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputURL">
                    *URL do Item*
                </label>
                <input class="form-control"
                    type="text"
                    id="inputURL"
                    name="url_item_digital"
                    value="{{ old('url_item_digital') }}"
                    placeholder="URL/Link para o item digital"
                    required
                >
            </div>           
            
            <div class="form-group">
                <label for="campo_descricao_item">
                    *Descrição do Item*
                </label>
                <textarea class="form-control"
                    id="campo_descricao_item"
                    name="descricao_item_digital"
                    placeholder="Escreva uma breve descrição"
                    required
                >{{{ old('descricao_item_digital') }}}</textarea>
            </div>

            <div class="form-group">
                <label for="custom-control-label">
                    Item foi utilizado em Avaliação em Larga Escala?
                </label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input"
                            type="radio"
                            id="customRadio1"
                            name="item_utilizado_larga_escala"
                            value="Sim"
                            checked
                        >
                        <label class="custom-control-label"
                            for="customRadio1"
                        >Sim</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input"
                            type="radio"
                            id="customRadio2"
                            name="item_utilizado_larga_escala"
                            value="Não"
                        >
                        <label class="custom-control-label"
                            for="customRadio2"
                        >Não</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="custom-control-label">O item digital é multidisciplinar?</label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input"
                            type="radio"
                            id="customRadio3"
                            name="item_multidisciplinar"
                            value="Sim"
                            checked
                        >
                        <label class="custom-control-label"
                            for="customRadio3"
                        >Sim</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input"
                            type="radio" 
                            id="customRadio4"
                            name="item_multidisciplinar"
                            value="Não"
                        >
                        <label class="custom-control-label"
                            for="customRadio4"
                        >Não</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inputAvaliacao">Nome da Avaliação em que o Item foi utilizado</label>
                <input type="text" class="form-control" id="inputAvaliacao" name="nome_avaliacao_item_digital">
            </div>

            <div class="form-group">
                <label for="inputAnoAvaliacao">Ano da Avaliação</label>
                <input type="text" class="form-control col-md-2" id="inputAnoAvaliacao" name="ano_item_digital">
            </div>
            
            <div class="form-group">
                <label>Escolher Arquivo de Imagem do Item</label>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputUploadImagem">Adicionar</label>
                    </div>
                    <div class="custom-file">
                        <input id="inputUploadImagem" type="file" class="custom-file-input" name="imagem_item_digital" onchange="exibeImagem()">
                        <label class="custom-file-label" for="inputUploadImagem">Escolher Arquivo de Imagem</label>
                    </div>          
                </div>
            </div>
            
            <div id="image_preview" class="form-group" style="display: none">
                <img id="preview-image-before-upload" class="img-fluid" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="Prévia da Imagem do Item Digital" title="Imagem do Item Digital" style="max-height: 250px">
            </div>    

            {{-- Scripts --}}
                <script>
                    function exibeImagem() {
                        $('#image_preview').show();
                    }
                </script>

                <script type="text/javascript">      
                    $(document).ready(function (e){                                           
                        $('#inputUploadImagem').change(function(){
                            let reader = new FileReader();                     
                            reader.onload = (e) => {                      
                            $('#preview-image-before-upload').attr('src', e.target.result); 
                            }                     
                            reader.readAsDataURL(this.files[0]);                        
                        });                       
                    });                     
                </script>
            {{--  --}}

            <div class="form-group">
                <label for="inputInstituicao">Instituição responsável pela Avaliação</label>
                <select id="inputInstituicao" class="form-control" name="nome_instituicao">
                    @if ($existeInstituicao)
                    @foreach ($instituicaoCadastrada as $instituicao)
                    <option value="{{$instituicao->nome_instituicao}}">
                        {{$instituicao->nome_instituicao}}
                    </option>
                    @endforeach
                    @else
                    <option class="font-italic" selected disabled>Nenhuma Instituição Cadastrada</option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="inputPlataforma">Plataforma em que o Item Digital está armazenado</label>
                <input type="text" class="form-control" id="inputPlataforma" name="plataforma_item_digital">
            </div>
            <div class="form-group">
                <label for="inputInstPlataforma">Instituição responsável pela plataforma</label>
                <input type="text" class="form-control" id="inputInstPlataforma" name="instituicao_plataforma">
            </div>

            <div class="form-group text-center">
                <button type="submit" class="py-2 w-50 my-3">Cadastrar</button>
            </div>

        </form>
    </div>
</div>
@endsection