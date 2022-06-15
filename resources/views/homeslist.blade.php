@extends('layouts.default')

@section('pageTitle, Lista case')

@section('mainContent')
@dump($homes)
    <h1 class="text-center">Appartaments<i class="fa-solid fa-home"></i></h1>
    <div class="row">
        @foreach ($homes as $home)
            <div class="col">
                <a href="{{route('detail', $home->id)}}">{{$home->title}}</a>    
            </div>
        @endforeach
        <div class="text-center">
            <button>
                <a href="{{route('home')}}">torna alla home</a>
            </button>
        </div>
    </div>
@endsection
    
