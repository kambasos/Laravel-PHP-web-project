@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header bg-primary text-white">
                    <h1>Вітаємо на головній сторінці таблиці продуктів</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">Ви можете розпочати переглад та редагування таблиці, увійшовши або зареєструвавшись до сайту.</p>
                    <a href="{{ route('login') }}" class="btn btn-success m-2">Увійти</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary m-2">Зареєструватися</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
