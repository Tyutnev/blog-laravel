@extends('layouts.form')

@section('title', 'Регистрация')


@section('content')
<form class="contact100-form ajax-form" method="POST" action="/create">
    <span class="contact100-form-title">
        За этой дверью мир еды
    </span>

    {{ csrf_field() }}

    <div class="wrap-input100">
        <input class="input100" type="text" name="name" placeholder="Имя" require>
        <span class="focus-input100"></span>
    </div>

    <div class="wrap-input100">
        <input class="input100" type="email" name="email" placeholder="Почта" require>
        <span class="focus-input100"></span>
    </div>

    <div class="wrap-input100">
        <input class="input100" type="password" name="password" placeholder="Пароль" require>
        <span class="focus-input100"></span>
    </div>

    <div class="wrap-input100">
        <input class="input100" type="password" name="password_repeat" placeholder="Повторите пароль" require>
        <span class="focus-input100"></span>
    </div>

    <div class="container-contact100-form-btn">
        <button class="contact100-form-btn">
            <span>
                Регистрация
            </span>
        </button>
    </div>
</form>
@endsection