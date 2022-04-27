@extends('layouts.auth')


@section('page.title' , 'Вход')



@section('auth.title')
    <x-card-title>Вход</x-card-title>
    <x-link href="{{ route('user.register') }}">Регистрация</x-link>
@endsection
@section('auth.content')
    @error('auth')
    <x-alert>{{ $message }}</x-alert>
    @enderror
    <x-form action=" {{route('user.login')}} " method="POST">
        <x-form-item>
            <x-label for="Email">Логин</x-label>
            <x-input id="login"  name="login" autofocus/>
        </x-form-item>
        <x-form-item>
            <x-label for="password">Пароль</x-label>
            <x-input type="password" id="password" name="password" />
        </x-form-item>
        <div class="mt-3 mb-3">
           <x-link>Не помню пароль</x-link>

        </div>

        <x-form-btn>Войти</x-form-btn>
    </x-form>
@endsection

