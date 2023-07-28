@extends('layouts.app')

@section('title','index')

@section('main-content')
<div class="container container-md p-5 p-md-0">
    <div class="row justify-content-md-center justify-content-lg-around">
        @foreach($list_beach as $beach)
        <div class="card p-0 col-12 col-md-5 col-lg-3 mb-3 me-md-4 me-lg-1">
            <img src="https://source.unsplash.com/random/?beach" class="card-img-top" style="height: 200px" alt="{{$beach->name}}">
            <div class="card-body">
            <h5 class="card-title"><span class='fw-bold'>Beach Name:</span> {{$beach->name}}</h5>
            <p class="card-text"><span class='fw-bold'>Location: </span>{{$beach->location}}</p>
            <p class="card-text"><span class='fw-bold'>Available Umbrellas: </span>{{$beach->num_umbrellas}}</p>
            <p class="card-text"><span class='fw-bold'>Umbrella Price: </span>{{$beach->umbrella_price . " $"}}</p>
            <p class="card-text"><span class='fw-bold'>Opening Date: </span>{{$beach->opening_date}}</p>
            <p class="card-text"><span class='fw-bold'>Closing Date: </span>{{$beach->closing_date}}</p>
            <p class="card-text"><span class='fw-bold'>Beach Volley Field: </span>{{$beach->has_beach_volley}}</p>
            <p class="card-text"><span class='fw-bold'>Soccer Field:</span>{{$beach->has_soccer_field}}</p>
            <div class="row">
            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                   <button type="button" class="btn btn-outline-primary">
                    <a class='text-decoration-none' href="{{ route ('admin.beachresorts.edit', $beach->id)}}">Edit</a>
                </button>
                   <button type="button" class="btn btn-outline-primary">Create</button>
                   <button type="button" class="btn btn-outline-primary">Show</button>
                   <button type="button" class="btn btn-outline-primary">Delete</button>
            </div>
            </div>
        </div>
    </div>
    @endforeach  
</div>
@endsection