@extends('layouts.app')

@section('title','index')

@section('main-content')
<div class="container container-md p-5 p-md-0">
  <div class="row justify-content-md-center justify-content-lg-around"">
  @if(session ('delete'))
    <div class="col-12 col-md-10 col-lg-11 alert alert-warn">
        The Resort {{ session('delete') }}  has been deleted  
      </div>
    </div>
  @elseif(session('update'))
  <div class="col-12 col-md-10 col-lg-11 alert alert-primary">
        The Resort {{ session('update') }}  has been updated  
      </div>
  </div>
  @elseif(session('created'))
  <div class="col-12 col-md-10 col-lg-11 alert alert-success">
        The Resort {{ session('created') }}  has been created 
      </div>
  </div>
  @elseif(session('restored'))
  <div class="col-12 col-md-10 col-lg-11 alert alert-info">
        The Resort {{ session('restored') }}  has been restored 
      </div>
  </div>
  @endif
    <div class="row justify-content-md-center justify-content-lg-around">
        @foreach($list_beach as $beach)
        <div class="card p-0 col-12 col-md-5 col-lg-3 mb-3 me-md-4 me-lg-1">
            <img src="https://source.unsplash.com/random/?beach" class="card-img-top" style="height: 200px" alt="{{$beach->name}}">
            <div class="card-body">
            <h5 class="card-title"><span class='fw-bold'>Beach Name:</span> {{$beach->name}}</h5>
            <p class="card-text"><span class='fw-bold'>Location: </span>{{$beach->location}}</p>
            <div class="row">
            <form class='delete-button' action="{{ route ('admin.beachresorts.destroy', $beach->id) }}" method='POST'>
                      @csrf
                      @method('DELETE')
            <div class="btn-group btn-group-sm d-flex mx-auto" role="group" aria-label="Small button group">
               <button type="button" class="btn btn-outline-primary hover-text-white">
                    <a class='text-decoration-none' href="{{ route ('admin.beachresorts.edit', $beach->id)}}">
                      Edit
                    </a>
               </button>
               <button type="button" class="btn btn-outline-primary hover-text-white">
                    <a class='text-decoration-none' href="{{ route ('admin.beachresorts.show', $beach->id)}}">
                        Show
                    </a>
                </button>
                      <button type="submit" class="btn btn-outline-primary">
                        Delete
                      </button>
                  </form>
            </div>
            </div>
        </div>
    </div>
    @endforeach  
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