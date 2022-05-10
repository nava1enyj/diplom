@extends('layouts.base')

@section('title' , 'Личный кабинет')

@section('content')

    <x-card col="col-12">
        <div class="text-center">


            <a href="" class="me-3">Биология</a>
            <a href="" class="me-3">Физика</a>
            <a href="" class="me-3">Химия</a>
            <a href="" class="me-3">Литература</a>
            <a href="" class="me-3">Философия</a>
            <a href="" class="me-3">Информатика</a>
            <a href="" class="me-3">Прочее</a>

        </div>

    </x-card>

    <div class="row justify-content-center">

        <x-card col="col-9">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    Фильтр
                </div>
                <div>
                    <a href="" class="pe-3">Новые</a>
                    <a href="" class="pe-3">По возрастанию</a>
                    <a href="">По убыванию</a>
                </div>
            </div>

        </x-card>
        <x-card col="col-9 col-sm-4 me-0 me-sm-3 col-lg-3 ">
            <div class="d-flex justify-content-between align-items-center border-bottom">

                <div class="text">#111</div>
                <div class="text">21-23-31</div>


            </div>

            <h5 class="text-center mt-3">Заголовок</h5>
            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem cum cumque distinctio
                dolore dolorum ducimus esse impedit incidunt inventore laudantium minima nobis quos, reiciendis
                voluptatem. Blanditiis corporis earum enim explicabo fugiat harum hic incidunt iure iusto laudantium
                maiores natus nulla numquam, perspiciatis sequi sint soluta suscipit ut velit veritatis? Autem
                consequuntur deserunt explicabo natus nisi odit sint veritatis voluptatibus. Aliquam, aliquid aspernatur
                distinctio eius ex inventore magni natus, nihil odit officia officiis perspiciatis quae quam repudiandae
                sunt vitae voluptatem. Ad, dignissimos dolor ea esse est eveniet laudantium possimus, quod, ratione
                repellat sed voluptatem. Adipisci aliquam eum nesciunt ratione ullam?
            </div>
            <div class="mt-3">


                <div class="d-flex  align-items-center justify-content-center like-container" title="Нравится">


                    <img src="{{ asset('img/marks/like.svg') }}" class="col-2 col-md-2 col-sm-3 col-ld-3 col-xl-2 like"
                         alt="">
                    <div class="fw-bold fs-5 ms-2 mt-1">500</div>


                </div>

            </div>

        </x-card>


    </div>

@endsection
