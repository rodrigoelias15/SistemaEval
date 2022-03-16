@extends("layouts.layout")

@section("titulo_pagina")
Cadastro de Itens Digitais
@endsection

@section("content")
<div class="row justify-content-center">
    <div class="col-sm-8 col-md-5">
        <div class="logo my-3">
            <img class="img-fluid" src="img/caedlogo.png" alt="Logo Caed">
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" class="form-group">
            @csrf
            <div class="form-group">
                <label for="inputItemDigital">Nome do Item Digital</label>
                <input type="text" class="form-control" id="inputItemDigital" name="nome_item_digital">
            </div>
            <div class="form-group">
                <label for="inputAreaDisciplina">Área/Disciplina</label>
                <input type="text" class="form-control" id="inputAreaDisciplina" name="area_item_digital">
            </div>
            <div class="form-group form-row">
                <div class="col-md-5">
                    <select name="escolaridade_item_digital" id="escolaridade1" class="form-control">
                        <option>Ensino Fundamental</option>
                        <option>Ensino Médio</option>
                        <option>Ensino Superior</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputURL">URL Item Digital</label>
                <input type="text" class="form-control" id="inputURL" name="url_item_digital">
            </div>
            <!-- <div class="form-group">
                <label for="inputJpeg">Upload JPEG/PNG</label>
                <input type="text" class="form-control" id="inputJpeg" name="upload_imagem_item_digital">
            </div> -->
            <div class="form-group">
                <label for="campo_descricao_item">Descrição do Item</label>
                <textarea id="campo_descricao_item" class="form-control" name="descricao_item_digital"></textarea>
            </div>
            <div class="form-group">
                <label for="custom-control-label">Item foi utilizado em larga escala?</label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio1" name="item_utilizado" class="custom-control-input" value="Sim" checked>
                        <label class="custom-control-label" for="customRadio1">Sim</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio2" name="item_utilizado" class="custom-control-input" value="Não">
                        <label class="custom-control-label" for="customRadio2">Não</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAvaliacao">Nome da Avaliação</label>
                <input type="text" class="form-control" id="inputAvaliacao" name="nome_avaliacao_item_digital">
            </div>
            <div class="form-group">
                <label for="inputAnoAvaliacao">Ano</label>
                <input type="text" class="form-control col-md-2" id="inputAnoAvaliacao" name="ano_item_digital">
            </div>
            <div class="form-group">
                <label for="inputInstituicao">Nome da Instituição</label>
                <input type="text" class="form-control" id="inputInstituicao" name="nome_instituicao">
            </div>
            <div class="form-group">
                <label for="inputPlataforma">Plataforma em que o Item está armazenado</label>
                <input type="text" class="form-control" id="inputPlataforma" name="plataforma_item_digital">
            </div>
            <div class="form-group">
                <label for="inputInstPlataforma">Instituição responsável pela plataforma</label>
                <input type="text" class="form-control" id="inputInstPlataforma" name="instituicao_plataforma">
            </div>
            <div class="form-group">
                <label for="inputInstituicaoItem">Instituição que desenvolveu item digital</label>
                <input type="text" class="form-control" id="inputInstituicaoItem" name="instituicao_item_digital">
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary py-2 w-50 my-3">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
@endsection