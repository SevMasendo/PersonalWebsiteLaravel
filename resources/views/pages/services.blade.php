@extends('layouts.app')

@section('content')
    @if (count($services)> 0)
        <ul>
            @foreach ($services as $service )
                <h1>{{$service}}</h1>
                <p>This is services Pages</p>
            @endforeach 
        </ul>
    @endif
@endsection