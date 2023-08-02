<nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
  <div class="container">
    <a class="navbar-brand" href="{{route ('guest.beachresorts.home') }}">
    <img src="https://www.pngitem.com/pimgs/m/349-3491499_sunset-beach-resort-hd-png-download.png" alt="beach-resort-logo" width="70">
   </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav d-flex">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route ('guest.beachresorts.home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route ('admin.beachresorts.index') }}">Resorts</a>
        </li>
      </ul>
      <li class="nav-item ms-auto d-flex">
            <a class="nav-link me-4" href="{{ route ('admin.beachresorts.create')}}"><i class="fa-solid fa-plus fa-xl" title='add new resort'></i></a>
            <a class="nav-link" href="{{ route ('admin.beachresorts.trashed')}}"><i class="fa-solid fa-trash fa-xl" title='trashed'></i></a>
      </li>
    </div>
  </div>
</nav>