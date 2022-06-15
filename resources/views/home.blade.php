@extends('layouts.default')

@section('pageTitle, HomePage')

@section('mainContent')
    <h1 class="text-center">Home Page<i class="fa-solid fa-home"></i></h1>
    <div class="text-center">
        <button>
            <a href="{{route('homes')}}">vedi appartamenti</a>
        </button>
    </div>
@endsection
    
