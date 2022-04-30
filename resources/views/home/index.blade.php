@extends('layouts.base')

@section('content')
    <x-card>
        <div class="text-center">

            <x-card-title>Викторина</x-card-title>
        </div>

        <div class="row">
            <div class="col-xl-2 col-lg-2 me-lg-5 me-xl-0 col-md-3 me-md-4 col-sm-12">

                <x-card-img-game-logo
                    src=" {{ url('img/quiz.png') }}"/>
            </div>
            <div class="col-xl-10 ps-xxl-2 ps-xl-4 col-lg-9 col-md-8 mt-md-0 col-sm-12 mt-3">

                <x-card-text>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur culpa
                    cum ipsam magnam, odit quos ullam unde veniam. Ab, ad facilis laudantium minus natus optio
                    voluptatibus! A adipisci aspernatur assumenda at consectetur cum cupiditate deserunt dicta dolore
                    dolorum error excepturi exercitationem id illo impedit inventore, iure laboriosam laborum magnam
                    magni modi natus nobis nulla placeat porro, possimus provident quaerat quo sapiente sequi, velit
                    veritatis voluptas voluptatum. A at debitis exercitationem inventore ipsam ipsum itaque magni,
                    minima nemo odit repellat saepe. Amet aperiam asperiores at error facere facilis illum impedit
                    laboriosam laudantium necessitatibus neque, nulla officia, omnis perspiciatis quas repudiandae vel.
                    Amet assumenda blanditiis dicta doloribus dolorum eius ex facere, fugit ipsum iure laboriosam nemo
                    nobis quia quisquam quo rem tenetur unde velit. Alias aliquam beatae commodi cupiditate doloremque
                    esse et expedita, illo in maxime non optio quas quasi, recusandae sunt unde vel voluptate!🇷🇺

                </x-card-text>
            </div>
        </div>
        <div class="mt-3 row gy-3 ms-1">
            <x-btn-game-start href="{{ route('game.quiz') }}">Играть</x-btn-game-start>
            <x-btn-game-leaders>Список лидеров</x-btn-game-leaders>
        </div>
    </x-card>



@endsection
