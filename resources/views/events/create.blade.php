@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')



    
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu Evento</h1>
        <form action="/events" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" name="image" class="form-control-file" id="image">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="date">Data do Evento:</label>
                <input type="date" name="date" class="form-control" id="date" >
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">O evento é privado:</label>
                <select  name="private" class="form-control" id="private">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descricão:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento"></textarea>
            </div>

            <div class="form-group">
                <label for="title">Adicione items de infra estrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="" value="Cadeiras">Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="" value="palco">Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="" value="Cerveja Grates">Cervejas Grates
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="" value="Open food">Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="" value="Brindes">Brindes
                </div>
               </div>
            
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>
    @endsection