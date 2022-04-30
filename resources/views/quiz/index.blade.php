@extends('layouts.base')

@section('page.title' , 'Викторина')

@section('content')
    <button type="submit" id="test">test</button>
@push('scripts')
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/quiz.js') }}"></script>
@endpush

@endsection
