@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid mt-4">
    <div class="container">
        <h1 class="h1">{{$posts->title}}</h1>
        <small>Date: {{$posts->created_at}}</small>
        <p>{{$posts->description}}</p>
    </div>
</div>
@endsection