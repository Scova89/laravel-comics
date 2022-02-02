@extends('layouts.base')

@section('pageTitle')
    Home
@endsection

@section('pageContent')
    <div class="container">
        <div class="cards">
            @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    <h5>{{$comic['series']}}</h5>
                </div>
        @endforeach
        </div>
        
    </div>
@endsection