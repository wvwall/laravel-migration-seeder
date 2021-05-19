@extends('layouts.app')

    @section('main')
      
    <div class="cards">
        @foreach ($holidays as $holiday)
            <div class="card">
                <h1> Id: {{ $holiday->id }}</h1>
                <h2> Destination: {{ $holiday->destination }}</h2>
                <h3> Date: {{ $holiday->date }}</h3>
                <h4> Number of people: {{ $holiday->n_person }}</h4>
                <h5>Price: $ {{ $holiday->price }}</h5>
                <h6>Days: {{ $holiday->days }}</h6>
            </div>
        @endforeach
        </div>
    @endsection