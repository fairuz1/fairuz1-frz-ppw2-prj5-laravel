@extends('layouts.app')

@section('content')
    <div class="row sections custom-positions" id="row1">
        <div class="col my-auto mx-auto text-center">
            <h1 class="h1 mb-0" style=" font-size: 4em"><b>Laravel's Features</b></h1>
            <small class="mb-4" style="font-size: 1.5em">A short summary on what i have learned about some of it's features</small><br>
            <small class="mb-4" style="font-size: 1.5em">Click <b><a href="#row2" class="custom-link">Here</a></b> to start reading and keep clicking until the end.</small>
        </div>
    </div>

    <div class="row sections" style="background-color: #CDF0EA;" id="row2">
        <div class="col my-auto mx-auto text-center">
            <h1 class="h1 mb-0" style=" font-size: 4em"><b>Routing made easier!</b></h1>
            <small class="mb-4" style="font-size: 1.5em">
                Laravel help routing between pages easier with their routing feature.
            </small><br>
            <small class="mb-4" style="font-size: 1.5em">
                Routes help display webpages another Laravel <b><a href="#row3" class="custom-link">Views</a></b>.
            </small>
        </div>
    </div>

    <div class="row sections" style="background-color: #ECC5FB;" id="row3">
        <div class="col my-auto mx-auto text-center">
            <h1 class="h1 mb-0" style=" font-size: 4em"><b>Display everything with Views</b></h1>
            <small class="mb-4" style="font-size: 1.5em">
                Views help to display webpages that were routed with laravel. In another words their feature are connected.
            </small><br>
            <small class="mb-4" style="font-size: 1.5em">
                Laravel also help developer code faster with their <b><a href="#row4" class="custom-link">Blade</a></b> file extensions.
            </small>
        </div>
    </div>

    <div class="row sections" style="background-color: #EEE3CB;" id="row4">
        <div class="col my-auto mx-auto text-center">
            <h1 class="h1 mb-0" style=" font-size: 4em"><b>Blade Shortned Everythings</b></h1>
            <small class="mb-4" style="font-size: 1.5em">
                Laravel's blade file extensions feature allow writing simple and fast PHP code.
            </small><br>
            <small class="mb-4" style="font-size: 1.5em">
                By the way, Laravel also has <b><a href="#row5" class="custom-link">Controller</a></b> Feature to help pass user request to another pages.
            </small>
        </div>
    </div>

    <div class="row sections" style="background-color: #D2D79F;" id="row5">
        <div class="col my-auto mx-auto text-center">
            <h1 class="h1 mb-0" style=" font-size: 4em"><b>Controller Made Passing Request Much Better</b></h1>
            <small class="mb-4" style="font-size: 1.5em">
                Controller feature functions as a logic that control user's request in the back-end.
            </small><br>
            <small class="mb-4" style="font-size: 1.5em">
                And sometimes, the request need to access data from database, this is where laravel's <b><a href="#row6" class="custom-link">Model</a></b> come into place.
            </small>
        </div>
    </div>

    <div class="row sections" style="background-color: #F9F9C5;" id="row6">
        <div class="col my-auto mx-auto text-center">
            <h1 class="h1 mb-0" style=" font-size: 4em"><b>Model Communicate to Database for Us</b></h1>
            <small class="mb-4" style="font-size: 1.5em">
                Model is laravel feature that help us access database when the request need to access database from controller
            </small><br>
            <small class="mb-4" style="font-size: 1.5em">
                This is the end of the pages, click <b><a href="#" class="custom-link">here</a></b> to go back on top.
            </small>
        </div>
    </div>
@endsection