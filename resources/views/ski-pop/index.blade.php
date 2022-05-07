@extends('layouts.base')

@section('title' , 'Личный кабинет')

@section('content')

    <h1>Привет , тест</h1>

    <x-card col="col-12">
        <div class="text-center">


            <a href="" class="me-2">Биология</a>
            <a href="" class="me-2">Физика</a>
            <a href="" class="me-2">Химия</a>
            <a href="" class="me-2">Информатика</a>

        </div>

    </x-card>

    <div class="row justify-content-center">


        <x-card col="col-3 me-3">

            <h5>Заголовок</h5>
            <a class="link-primary" href="">Читать подробнеt</a>

        </x-card>


        <x-card col="col-3 me-3">

            <h5>Заголовок</h5>
            <a class="link-primary" href="">Читать подробнеt</a>

        </x-card>


        <x-card col="col-3 me-3">

            <h5>Заголовок</h5>
            <a class="link-primary" href="">Читать подробнеt</a>
        </x-card>

    </div>

@endsection
