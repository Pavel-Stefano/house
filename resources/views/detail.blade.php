@extends('layouts.default')

@section('pageTitle, Dettaglio')

@section('mainContent')
    <h1 class="text-center">{{$home->title}}<i class="fa-solid fa-home"></i></h1>
    <h5 class= text-center>Benvenuto</h5>
    <div class="text-center">
        <button>
            <a href="{{route('homes')}}">torna ad appartamenti</a>
        </button>
        <button>
            <a href="{{route('home')}}">torna alla home</a>
        </button>
    </div>
@endsection
    
