@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$index}}</h1>
        <p>This is Index Pages</p>
         <p><a class="btn btn-primary btn-lg" href="/login" role="button"> login </a> <a class="btn btn-success btn-lg" href="/register" role="button"> Register </a> </p>
    </div>
@endsection