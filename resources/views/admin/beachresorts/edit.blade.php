@extends('layouts.app')

@section('title', 'Edit Beach Resort')

@section('main-content')
<div class="container py-5">
    <div class="row">

    <div class="col-8 mx-auto mb-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="col-8 mx-auto">
            <h1 class='text-center mb-5'>
                Edit Beach Resort
            </h1>
   <form action="{{ route ('admin.beachresorts.update', $beach->id)}}" method='POST'>
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name='name' value='{{$beach->name}}'>
  </div>
  <div class="mb-3">
    <label for="location" class="form-label">Location</label>
    <input type="text" class="form-control" id="location" name='location' value='{{$beach->location}}'>
  </div>
  <div class="mb-3">
    <label for="num_umbrellas" class="form-label">Available Umbrellas</label>
    <input type="number" class="form-control" id="num_umbrellas" name='num_umbrellas' value='{{$beach->num_umbrellas}}'>
  </div>
  <div class="mb-3">
    <label for="num_sunbeds" class="form-label">Number Umbrellas</label>
    <input type="number" class="form-control" id="num_sunbeds" name='num_sunbeds' value='{{$beach->num_sunbeds}}'>
  </div>
  <div class="mb-3">
    <label for="umbrella_price" class="form-label">Umbrella's Price</label>
    <input type="text" class="form-control" id="umbrella_price" name='umbrella_price' value='{{$beach->umbrella_price}}'>
  </div>
  <div class="mb-3">
    <label for="opening_date" class="form-label">Opening Date</label>
    <input type="date" class="form-control" id="opening_date" name='opening_date' value='{{$beach->opening_date}}'>
  </div>
  <div class="mb-3">
    <label for="closing_date" class="form-label">Closing Date</label>
    <input type="date" class="form-control" id="closing_date" name='closing_date' value='{{$beach->closing_date}}'>
  </div>
  <div class="mb-3">
    <label for="has_beach_volley" class="form-label">Beach Volley Field</label>
    <input type="text" class="form-control" id="has_beach_volley" name='has_beach_volley' value='{{$beach->has_beach_volley}}'>
  </div>
  <div class="mb-3">
    <label for="has_soccer_field" class="form-label">Soccer Field</label>
    <input type="text" class="form-control" id="has_soccer_field" name='has_soccer_field' value='{{$beach->has_soccer_field}}'>
  </div>
  <button type="submit" class="btn btn-primary">Edit Comic</button>
  <button type="reset" class="btn btn-warning">Reset</button>
</form>
        </div>
    </div>
</div>
@endsection