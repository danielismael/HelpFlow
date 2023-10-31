@extends('layouts.app')

@section('content')
    <!-- title -->
    <h1 class="title">Chamados TI</h1>

    <!-- breadcrumb -->
    <ul class="breadcrumb">
        <li class="breadcrumb_item"><a href="{{route('index')}}" class="breadcrumb_link">Dashboard</a></li>
        <li class="breadcrumb_item">/</li>
        <li class="breadcrumb_item breadcrumb_link">Chamados</li>
        <li class="breadcrumb_item">/</li>
        <li class="breadcrumb_item breadcrumb_link active">TI</li>
    </ul>

    <main class="card">
        <div class="card_header">
            <h2 class="subtitle">Todos os chamados</h2>

            <a href="" class="button_small">Abir chamado</a>
        </div>

        <div class="card_body">

        </div>
    </main>
@endsection
