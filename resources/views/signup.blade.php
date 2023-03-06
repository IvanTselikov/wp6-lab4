@extends('layouts.app')

@section('title-block', 'Регистрация')

@section('content')
    <h3 class="text-center mb-3 mt-4">Регистрация</h3>
    <form action="{{ route('signup-submit') }}" id="registr-form" method="POST" novalidate>
        @csrf
        <div class="mt-4 mb-3">
            <label for="registr-input-first-name" class="col-form-label">Имя*</label>
            <input name="firstName" type="text" class="form-control" id="registr-input-first-name"
                autocomplete="off" required>
            <div class="error-message text-danger d-none" data-input="registr-input-first-name">
                Пожалуйста, введите имя.
            </div>
            <div class="form-text">только текст, не менее 2 символов, не более 15</div>
        </div>

        <div class="mb-3">
            <label for="registr-input-last-name" class="col-form-label">Фамилия*</label>
            <input name="lastName" type="text" class="form-control" id="registr-input-last-name"
                autocomplete="off" required>
            <div class="error-message text-danger d-none" data-input="registr-input-last-name">
                Пожалуйста, введите фамилию.
            </div>
            <div class="form-text">только текст, не менее 2 символов, не более 15</div>
        </div>

        <div class="mb-3">
            <label for="registr-input-email" class="col-form-label">Адрес электронной почты*</label>
            <input name="email" type="text" class="form-control" id="registr-input-email"
                placeholder="username@service.com" autocomplete="off" required>
            <div class="error-message text-danger d-none" data-input="registr-input-email">
                Пожалуйста, введите адрес электронной почты.
            </div>
        </div>

        <div class="mb-3">
            <label for="registr-input-login" class="col-form-label">Логин*</label>
            <input name="login" type="text" class="form-control" id="registr-input-login" autocomplete="off"
                required>
            <div class="error-message text-danger d-none" data-input="registr-input-login">
                Пожалуйста, введите логин.
            </div>
            <div class="form-text">не менее 6 символов</div>
        </div>

        <div class="mb-3">
            <label for="registr-input-password" class="col-form-label">Придумайте пароль*</label>
            <div class="password-group input-group mb-3">
                <input name="password" type="password" class="form-control" id="registr-input-password"
                    aria-describedby="registr-show-password" autocomplete="off" required>
                <button type="button" class="btn btn-primary" id="registr-show-password">
                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                </button>
            </div>
            <div class="error-message text-danger d-none" data-input="registr-input-password">
                Пожалуйста, введите пароль.
            </div>
            <div class="form-text">не менее 8 символов, обязательно совместное использование
                прописных, строчных латинских букв, цифр, символов !@#$%^&*_=+</div>
        </div>

        <div class="mb-4">
            <label for="registr-input-password-check" class="col-form-label">Повторите
                пароль*</label>
            <div class="password-group input-group mb-3">
                <input name="passwordCheck" type="password" class="form-control"
                    id="registr-input-password-check" aria-describedby="registr-show-password-check"
                    autocomplete="off" required>
                <button type="button" class="btn btn-primary" id="registr-show-password-check">
                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                </button>
            </div>
            <div class="error-message text-danger d-none" data-input="registr-input-password-check">
                Пожалуйста, повторите пароль.
            </div>
        </div>

        <div class="mb-4">
            <p class="mb-2">Пол*</p>
            <div class="form-check form-check-inline">
                <input name="gender" type="radio" class="form-check-input" id="male-radio" value="1"
                    required>
                <label for="male-radio" class="form-check-label">Мужской</label>
            </div>
            <div class="form-check form-check-inline">
                <input name="gender" type="radio" class="form-check-input" id="female-radio" value="0">
                <label for="female-radio" class="form-check-label">Женский</label>
            </div>
            <div class="error-message text-danger d-none" data-input="male-radio female-radio">
                Пожалуйста, укажите пол.
            </div>
        </div>

        <select name="isAdult" class="mb-4 form-select" id="age-select">
            <option value="0" selected>Мне нет 18 лет</option>
            <option value="1">Мне исполнилось 18 лет</option>
        </select>

        <div class="mb-4 form-check">
            <input name="accept" type="checkbox" class="form-check-input" id="accept-checkbox" required>
            <label for="accept" class="form-check-label">Принимаю Пользовательское соглашение*</label>
            <div class="error-message text-danger d-none" data-input="accept-checkbox">
                Вам нужно принять соглашение, чтобы продолжить.
            </div>
        </div>

        <div class="form-text mb-3">
            * - поля, обязательные для заполнения
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary my-3">Регистрация</button>
        </div>

        <div class="loader">
            <img src="../img/loader.svg" alt="loading...">
        </div>
    </form>
@endsection
