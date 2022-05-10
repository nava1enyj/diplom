@extends('layouts.auth')


@section('page.title' , 'Регаемся')



@section('auth.title')
    <x-card-title>Создания науч-поп поста</x-card-title>

@endsection
@section('auth.content')

{{--    @if($errors->any())--}}
{{--        <x-alert>--}}
{{--            <ul>--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </x-alert>--}}
{{--    @endif--}}


    <x-form>
        <x-form-item>
            <x-label for="title">Заголовок</x-label>
            <x-input type="text" id="title" name="title" autofocus/>
        </x-form-item>

        <div class="mb-4">
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>



        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Comments</label>
        </div>


        <x-form-btn>Cоздать пост</x-form-btn>
    </x-form>
@endsection

