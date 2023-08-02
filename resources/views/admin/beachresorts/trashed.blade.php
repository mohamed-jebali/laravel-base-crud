@extends('layouts.app')

@section('title','Trashed')

@section('main-content')
<div class="container container-md p-5 p-md-0">
  <h1 class='text-center my-4'>
    Trashed Resorts
  </h1>
    <div class="row justify-content-md-center justify-content-lg-around">
        @foreach($list_beach as $beach)
        <div class="card p-0 col-12 col-md-5 col-lg-3 mb-3 me-md-4 me-lg-1">
            <img src="https://source.unsplash.com/random/?beach" class="card-img-top" style="height: 200px" alt="{{$beach->name}}">
            <div class="card-body">
            <h5 class="card-title"><span class='fw-bold'>Beach Name:</span> {{$beach->name}}</h5>
            <p class="card-text"><span class='fw-bold'>Location: </span>{{$beach->location}}</p>
            <form class='restore-button' action="{{ route ('admin.beachresorts.restore', $beach->id)}}" method='POST'>
              @csrf
              @method('DELETE')
              <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                <button class='btn btn-outline-warning'>
                  Restore
                </button>
              </div>
            </form>
            </div>
        </div>
        @endforeach  
    </div>
</div>
@endsection


@section('custom-scripts-tail')
<script>
  const restoreButtons = document.querySelectorAll('.restore-button');

  restoreButtons.forEach(element => {
    element.addEventListener('submit', function (event){
      event.preventDefault();
      const popUpWindow = window.confirm('Are you sure you want restore this Beach Resort?');
      if (popUpWindow){
        this.submit();
      }
    });
  });
</script>
@endsection