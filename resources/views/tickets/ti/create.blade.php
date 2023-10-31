@extends('layouts.app')

@section('content')
    <!-- title -->
    <h1 class="title">Chamados TI</h1>

    <!-- breadcrumb -->
    <ul class="breadcrumb">
        <li class="breadcrumb_item"><a href="{{route('index')}}" class="breadcrumb_link">Dashboard</a></li>
        <li class="breadcrumb_item">/</li>
        <li class="breadcrumb_item breadcrumb_link"><a href="{{route('ticket.index')}}" class="breadcrumb_link">Chamados TI</a></li>
        <li class="breadcrumb_item">/</li>
        <li class="breadcrumb_item breadcrumb_link active">Novo</li>
    </ul>

    <main class="card">
        <div class="card_header">
            <h2 class="subtitle">Novo chamado</h2>
        </div>

        <div class="card_body create-ticket">
            <label class="group-form">
                <span class="form-label">Solicitante</span>
                <input type="text" class="form-control" readonly>
            </label>

            <label class="group-form">
                <span class="form-label">Abertura</span>
                <input type="date" class="form-control">
            </label>

            <label class="group-form">
                <span class="form-label">Ramal</span>
                <input type="text" class="form-control">
            </label>

            <label class="group-form">
                <span class="form-label">Telefone</span>
                <input type="text" class="form-control">
            </label>

            <label class="group-form">
                <span class="form-label">Prazo atendimento</span>
                <input type="date" class="form-control">
            </label>

            <label class="group-form">
                <span class="form-label">Descrição</span>
                <input type="text" class="form-control">
            </label>

            <label class="group-form">
                <span class="form-label">Observações</span>
                <textarea name="descricao"></textarea>
            </label>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.7.2/tinymce.min.js"></script>
    <script src="{{asset('/js/tinymce.js')}}"></script>
@endsection
