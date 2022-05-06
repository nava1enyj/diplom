@extends('layouts.base')

@section('page.title' , 'Главная')

@section('content')

    <x-card>
        <div class="ps-1 pe-1 ps-md-3 pe-md-3">


            <h4 class="border-bottom border-end p-2">
                Интеллект в период пандемии
            </h4>
            <div class="ps-1 pe-1 ps-md-3 pe-md-3">


                <div class="fs-5 mt-4">Оставаться дома, следить за состоянием
                    своего здоровья и исключать контакты с
                    другими после тесного контакта с лицами. Главное в период пандемии. А портал поможет в этом! 😉
                </div>


            </div>


            {{--            <div class="p-3">--}}
            {{--                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">--}}
            {{--                    <div class="carousel-indicators">--}}
            {{--                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
            {{--                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
            {{--                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
            {{--                    </div>--}}
            {{--                    <div class="carousel-inner rounded">--}}
            {{--                        <div class="carousel-item active">--}}
            {{--                            <img src="{{ asset('img/intelect-slider.jpg') }}" class="d-block w-100" alt="...">--}}
            {{--                            <div class="carousel-caption d-none d-md-block">--}}
            {{--                                <h5>Интеллект</h5>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="carousel-item">--}}
            {{--                            <img src="{{ asset('img/pandemia-slider.jpg') }}" class="d-block w-100" alt="...">--}}
            {{--                            <div class="carousel-caption d-none d-md-block">--}}
            {{--                                <h5>Пандемия</h5>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="carousel-item">--}}
            {{--                            <img src="{{ asset('img/time-slider.jpg') }}" class="d-block w-100" alt="...">--}}
            {{--                            <div class="carousel-caption d-none d-md-block">--}}
            {{--                                <h5>Время</h5>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">--}}
            {{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
            {{--                        <span class="visually-hidden">Previous</span>--}}
            {{--                    </button>--}}
            {{--                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">--}}
            {{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
            {{--                        <span class="visually-hidden">Next</span>--}}
            {{--                    </button>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>

    </x-card>

    <x-card>
        <div class="ps-1 pe-1 ps-md-3 pe-md-3">
            <div class="row mt-4">


                <h4 class="border-bottom  p-2 text-end mb-4">
                   Онлайн викторина
                </h4>

                <div class="col-12 col-md-9">
                    <div class="row">
                        <div class="col-12 offset-2 offset-sm-0 col-md-5 col-lg-4 col-xl-3 mb-3 mb-md-0 ps-0 ps-xl-3 ps-lg-4">
                            <img class="img-medium-size p-1" src="{{ asset('img/quiz.png') }}" alt="">
                        </div>
                        <div class="col-12 col-md-7 col-lg-8 col-xl-9">
                            <h5 class="text-center mt-md-0">Что такое викторина?</h5>
                            <div class="text">
                                Викторина — игра, заключающаяся в ответах на устные или письменные вопросы из различных областей
                                знания. Викторины в основном отличаются друг от друга правилами, определяющими очерёдность хода,
                                типы и сложность вопроса, порядок определения победителей, вознаграждение за правильный ответ.
                            </div>

                        </div>

                        <a href="{{ route('game.quiz') }}" class="btn btn-warning col-12 mt-3 col-lg-4 col-xl-3 col-md-4">Играть</a>

                    </div>


                </div>
                <div class="col-12 col-md-3 mt-3 mt-md-0 border-start">
                    <h5 class="text-center mt-md-0">Лучшие игроки:</h5>
                    @php($key = 1)
                    @foreach($records as $record)
                        <div class="text-center mt-2">{{ $key++ }}. {{ $record->users['login'] }} - {{ $record->score }}</div>
                    @endforeach

                </div>

            </div>
        </div>
    </x-card>

@endsection
