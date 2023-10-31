@extends('layouts.simple')

@section('content')
    <section class="login">
        <div class="container">
            <div class="card">
                <img src="{{asset('/images/logo.svg')}}" alt="Logo" class="logo">

                <h1 class="title">Entre com seu e-mail</h1>

                <form action="{{route('login.entry')}}" method="post" class="form">
                    @csrf
                    @method('post')
                    <label class="group-form">
                        <input type="email" name="email" class="form-control" placeholder="example@helpflow.com">
                    </label>

                    <label class="group-form">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </label>

                    <a href="{{route('login.recover.password')}}" class="form-recover-password">Esqueceu sua senha?</a>

                    <button type="submit" class="form-submit">Fazer login</button>
                </form>
            </div>
        </div>
    </section>

    <x-alerts-component/> <!-- Alerts -->
@endsection
