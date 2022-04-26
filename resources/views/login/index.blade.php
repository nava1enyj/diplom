@extends('layouts.auth')


@section('page.title' , 'Вход')



@section('auth.title')
    <x-card-title>Вход</x-card-title>
    <x-link href="{{ route('register') }}">Регистрация</x-link>
@endsection
@section('auth.content')
    <x-alert>test</x-alert>
    <x-form action="" method="POST">
        <x-form-item>
            <x-label for="Email">Email</x-label>
            <x-input type="email" id="email" aria-describedby="emailHelp" autofocus/>
        </x-form-item>
        <x-form-item>
            <x-label for="password">Password</x-label>
            <x-input type="password" id="password"/>
        </x-form-item>

        <x-form-btn>Войти</x-form-btn>
    </x-form>
@endsection

