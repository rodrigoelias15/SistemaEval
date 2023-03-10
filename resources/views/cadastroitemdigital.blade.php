@extends("layouts.layout")

@section("titulo_pagina")
Cadastro de Itens Digitais
@endsection

@section("content")

<?php

$grausEscolaridade = [
    "Ensino Fundamental" => " Ensino Fundamental",
    "Ensino Médio" => "Ensino Médio",
    "Ensino Superior" => "Ensino Superior",
];

?>

<x-panels.content>

    <x-icons.logo/>
    
    <x-alerts.success />
    <x-alerts.error />

    <x-panels.form>
        <form id="itemform" method="post" class="form-group" action="{{route('cadastrar_item_digital')}}" enctype="multipart/form-data">
            @csrf
            <x-aviso>
                Items com * são obrigatórios
            </x-aviso>
        
            <h3 class='text-center'>Informações do Item</h3>
            <x-icons.line/>
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
                        placeholder="Escolher grau"
                        type="text"
                        required>
                    >
                        @foreach($grausEscolaridade as $grau)
                            <option value="{{ $grau }}"
                                @if(old('escolaridade_item_digital') == $grau)
                                    selected
                                @endif
                            >
                                {{$grau}}
                            </option>
                        @endforeach
                    </select>
                </div>
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
                <label for="custom-control-label">*O item digital é multidisciplinar ?*</label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input"
                            type="radio"
                            id="customRadio3"
                            name="item_multidisciplinar"
                            value="Sim"
                            {{ old('item_multidisciplinar') == "Sim" ? 'checked' : '' }}
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
                            {{ old('item_multidisciplinar') == "Não" ? 'checked' : '' }}
                        >
                        <label class="custom-control-label"
                            for="customRadio4"
                        >Não</label>
                    </div>
                </div>
            </div>
            <h3 class='text-center'>Informações de Local</h3>
            <x-icons.line/>
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
                <label for="inputPlataforma">
                    *Plataforma em que o Item Digital está armazenado*
                </label>
                <input class="form-control"
                    type="text"
                    id="inputPlataforma"
                    name="plataforma_item_digital"
                    value="{{ old('plataforma_item_digital') }}"
                    placeholder="Digite a plataforma"
                    required
                >
            </div>
        
            <div class="form-group">
                <label for="inputInstPlataforma">
                    *Instituição responsável pela plataforma*
                </label>
                <input class="form-control"
                    type="text"
                    id="inputInstPlataforma"
                    name="instituicao_plataforma"
                    value="{{ old('instituicao_plataforma') }}"
                    placeholder="Digite a instituição"
                    required
                >
            </div>
        
            <h3 class='text-center'>Informações de Avaliação</h3>
            <x-icons.line/>
            <div class="form-group">
                <label for="custom-control-label">
                    *Item foi utilizado em Avaliação em Larga Escala ?*
                </label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input hidden-controller"
                            type="radio"
                            id="customRadio1"
                            name="item_utilizado_larga_escala"
                            value="Não"
                        >
                        <label class="custom-control-label"
                            for="customRadio1"
                        >Não</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input hidden-controller"
                            type="radio"
                            id="customRadio2"
                            name="item_utilizado_larga_escala"
                            value="Sim"
                        >
                        <label class="custom-control-label"
                            for="customRadio2"
                        >Sim</label>
                    </div>
                </div>
            </div>
        
            <div id='hiddenform' style='display:none'>
                <h5 class='text-center mb-4'>Forneça mais informações</h5>
        
                <div class="form-group">
                    <label for="inputAvaliacao">
                        Nome da Avaliação em que o Item foi utilizado
                    </label>
                    <input type="text"
                        class="form-control"
                        id="inputAvaliacao"
                        name="nome_avaliacao_item_digital"
                        value="{{ old('nome_avaliacao_item_digital') }}"
                        placeholder="Digite a Avaliação"
                    >
                </div>
                <div class="form-group">
                    <label for="inputInstituicao">Instituição responsável pela Avaliação</label>
                    <select id="inputInstituicao"
                        class="form-control"
                        name="nome_instituicao"
                    >
                        @if ($existeInstituicao)
                            @foreach($instituicaoCadastrada as $instituicao)
                                <option value="{{ $instituicao->nome_instituicao }}"
                                    @if(old('nome_instituicao') == $instituicao->nome_instituicao)
                                        selected
                                    @endif
                                >
                                    {{$instituicao->nome_instituicao}}
                                </option>
                            @endforeach
                        @else
                            <option class="font-italic" selected disabled>Nenhuma Instituição Cadastrada</option>
                        @endif
                    </select>
                </div>
        
                <div class="form-group">
                    <label for="inputAnoAvaliacao">Ano da Avaliação</label>
                    <input type="text"
                        class="form-control col-md-2"
                        id="inputAnoAvaliacao"
                        name="ano_item_digital"
                        value="{{ old('ano_item_digital') }}"
                        placeholder="Ano"
                    >
                </div>
            </div>
            <h3 class='text-center'>Visualização do Item</h3>
            <x-icons.line/>
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
                <script>
                    $('.hidden-controller').on('change', function(){
                        if($(this).val() == 'Sim')
                        {
                            document.getElementById('hiddenform').style['display'] = 'block';
                        }
                        else
                        {
                            document.getElementById('hiddenform').style['display'] = 'none';
                        }
                    });
                </script>
            {{--  --}}
            <x-button>
                Cadastrar item
            </x-button>
        </form>
    </x-panels.form>

    <x-sweetalerts.redirect_avalitem />
    <x-sweetalerts.confirmation_form />

</x-panels.content>
@endsection