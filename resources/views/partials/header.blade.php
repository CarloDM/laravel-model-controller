<header class="container-fluid bg-black">
  <ul class="nav my-2">

    <li class="nav-item">
      <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{route('home')}}">home</a>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link {{Route::currentRouteName() === 'movie' ? 'active' : '' }}" href="{{route('movie')}}">movie</a>
    </li> --}}
    {{-- <li class="nav-item">
      <a class="nav-link disabled">Disabled</a>
    </li> --}}
    {{-- <h3>{{Route::currentRouteName()}}</h3> --}}
  </ul>
</header>
