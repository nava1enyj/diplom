@extends('layouts.auth')


@section('page.title' , 'Регаемся')



@section('auth.title')
            <x-card-title>Регистрация</x-card-title>
            <x-link href="{{ route('login') }}">Вход</x-link>
@endsection
@section('auth.content')
        <x-alert>test</x-alert>
        <x-form action="{{ route('login') }}" method="POST">
            <x-form-item>
                <x-label for="Email">Email</x-label>
                <x-input type="email" id="email" aria-describedby="emailHelp" autofocus/>
            </x-form-item>
            <x-form-item>
                <x-label for="login">Ваш логин</x-label>
                <x-input id="login"/>
            </x-form-item>
            <x-form-item>
                <x-label for="avatar">Аватар</x-label>
                <x-input type="file" id="avatar"/>
                <div id="Help" class="form-text text-end">Необязательное поле</div>

            </x-form-item>
            <x-form-item>
                <x-label for="password">Пароль</x-label>
                <x-input type="password" id="password"/>
            </x-form-item>
            <x-form-item>
                <x-label for="password_confirm">Подтвердите пароль</x-label>
                <x-input type="password_confirm" id="password_confirm"/>
            </x-form-item>


            <x-form-btn>Создать аккаунт</x-form-btn>
        </x-form>
@endsection

