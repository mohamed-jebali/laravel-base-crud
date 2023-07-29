@extends('layouts.app')

@section('title','Show Beach Resort')

@section('main-content')
<div class="container container-md p-5 p-md-0">
    <div class="row justify-content-md-center justify-content-lg-around">
        <div class="card p-0 col-12 col-md-5 col-lg-3 mb-3 me-md-4 me-lg-1">
            <img src="https://source.unsplash.com/random/?beach" class="card-img-top" style="height: 200px" alt="">
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
                <form class='delete-button' action="{{ route ('admin.beachresorts.destroy', $beach->id) }}" method='POST'>
                   @csrf
                   @method('DELETE')
            <div class="btn-group btn-group-sm d-flex mx-auto" role="group" aria-label="Small button group">
                   <button type="button" class="btn btn-outline-primary hover-text-white">
                    <a class='text-decoration-none' href="{{ route ('admin.beachresorts.edit', $beach->id)}}">Edit</a>
                   </button>
                      <button type="submit" class="btn btn-outline-primary">Delete</button>
                  </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('custom-scripts-tail')
<script>
  const deleteButtons = document.querySelectorAll('.delete-button');

  deleteButtons.forEach(element => {
    element.addEventListener('submit', function (event){
      event.preventDefault();
      const popUpWindow = window.confirm('Are you sure you want to delete this Beach Resort?');
      if (popUpWindow){
        this.submit();
      }
    });
  });
</script>
@endsection