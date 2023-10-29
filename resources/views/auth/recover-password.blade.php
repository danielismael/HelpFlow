@extends('layouts.app')

@section('content')
    <section class="login">
        <div class="container">
            <div class="card">
                <img src="{{asset('/images/logo.svg')}}" alt="Logo" class="logo">

                <h1 class="title">Recuperar senha</h1>

                <form action="{{route('login.process.password')}}" method="post" class="form">
                    @csrf
                    @method('post')
                    <label class="group-form">
                        <input type="email" name="email" class="form-control" placeholder="example@helpflow.com">
                    </label>

                    <button type="submit" class="form-submit m-0">Recuperar senha</button>
                </form>
            </div>
        </div>
    </section>

    <x-alerts-component/> <!-- Alerts -->
@endsection
