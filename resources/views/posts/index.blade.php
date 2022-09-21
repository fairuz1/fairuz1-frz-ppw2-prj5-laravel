@extends('layouts.app')

@section('content')

<div class="alert alert-primary alert-dismissible fade show login-alert" role="alert">
    @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <h4 class="alert-heading"><b>Welcome to CRUD Page!</b></h4>
    <p> Congratulation <b>{{ Auth::user()->name }}</b>, you have visited the CRUD Page! You could do many things in here.</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<div class="container">
    <div class="row mt-4 mb-4">
        <h1 class="h1">Write your Thought About <b>This Website</b>!</h1>
        <p style="font-size: 1.3em">
            This is an example of a CRUD operations in laravel. 
            What is your thoughts about this website?
            Leave what you feel in the table below by 
            pressing this button.
        </p>
        <div class="mb-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addImpressions"><b>Add Impressions</b></button>
        </div>
        <table class="table caption-top table-hover table-bordered text-center mt-2">
            <caption>People impressions about this website</caption>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Impressions</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                @if (count($posts) > 0)
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->created_at}}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <th scope="row">Be the first to add your impressions!</th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="addImpressions">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="h3 headingData mb-0" style="font-size: 2em;"><b>Add <span style="color: #319DA0;">Impressions</b></span></h3>
            </div>
            <div class="modal-body" style="color: #2E2E2E;">
                <form action="{{ route('posts.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" maxlength="50">
                    </div>
                    <div class="mb-3">
                        <label for="impressions" class="form-label">Impressions about this website</label>
                        <textarea class="form-control" name="impressions" id="impressions" cols="10" rows="5" maxlength="200"></textarea>
                        <div class="form-text" id="impressions_detail">Every thoughts you have is fine</div>
                    </div>

                    <button type="submit" class="btn btn-primary" style="font-size: 1em;"><b>Tambah Data</b></button>
                    <button type="button" class="btn btn-secondary delete ms-2" style="font-size: 1em;" data-bs-dismiss="modal"><b>Kembali</b></button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection