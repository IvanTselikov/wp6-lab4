@extends('layouts.app')

@section('title-block', 'Авторизация')

@section('content')
    <h3 class="text-center mb-3 mt-4">Вход</h3>
    <form action="{{ route('login-submit') }}" id="author-form" method="POST" novalidate>
        @csrf

        <div class="mt-4 mb-3">
            <label for="login" class="col-form-label">Логин*</label>
            <input name="login" type="text" class="form-control" id="author-input-login" autocomplete="off"
                required>
            <div class="error-message text-danger d-none" data-input="author-input-login">
                Пожалуйста, введите логин.
            </div>
        </div>

        <div class="mb-4">
            <label for="password" class="col-form-label">Пароль*</label>
            <div class="password-group input-group mb-3">
                <input name="password" type="password" class="form-control" id="author-input-password"
                    autocomplete="off" aria-describedby="author-show-password" required>
                <button type="button" class="btn btn-primary" id="author-show-password">
                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                </button>
            </div>
            <div class="error-message text-danger d-none" data-input="author-input-password">
                Пожалуйста, введите пароль.
            </div>
        </div>

        <div class="form-text mb-3">
            * - поля, обязательные для заполнения
        </div>

        <div class="d-grid gap-2">
            <button name="submitAuthor" type="submit" form="author-form" class="btn btn-primary btn-block my-2">Войти</button>
        </div>

        <div class="loader">
            <img src="../img/loader.svg" alt="loading...">
        </div>
    </form>
@endsection
