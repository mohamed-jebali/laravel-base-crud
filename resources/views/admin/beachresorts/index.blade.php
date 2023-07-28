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
            <div class="row">
            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                   <button type="button" class="btn btn-outline-primary">
                    <a class='text-decoration-none' href="{{ route ('admin.beachresorts.edit', $beach->id)}}">Edit</a>
                </button>
                   <button type="button" class="btn btn-outline-primary">
                   <a class='text-decoration-none' href="{{ route ('admin.beachresorts.create')}}">Create</a>
                </button>
                   <button type="button" class="btn btn-outline-primary">
                    <a href="{{ route ('admin.beachresorts.show', $beach->id)}}">
                        Show
                    </a>
                </button>
                   <button type="button" class="btn btn-outline-primary">Delete</button>
            </div>
            </div>
        </div>
    </div>
    @endforeach  
</div>
@endsection