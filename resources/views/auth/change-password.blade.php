@extends('layouts.app')

@section('content')
    <section class="login">
        <div class="container">
            <div class="card">
                <img src="{{asset('/images/logo.svg')}}" alt="Logo" class="logo">

                <h1 class="title">Alterar a senha</h1>

                <form action="{{route('login.recover.changePassword')}}" method="post" class="form">
                    @csrf
                    @method('post')
                    <input type="hidden" name="token" value="{{$token}}">
                    <input type="hidden" name="id" value="{{$user->id}}">

                    <label class="group-form">
                        <input type="password" name="password" class="form-control" placeholder="Digite sua senha">
                    </label>

                    <label class="group-form">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirme sua senha">
                    </label>

                    <button type="submit" class="form-submit m-0">Alterar senha</button>
                </form>
            </div>
        </div>
    </section>

    <x-alerts-component/> <!-- Alerts -->
@endsection
