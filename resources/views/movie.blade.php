@extends('layout.main')

@section('content')
<div class="container">

  <div class="card" style="width: 18rem;">
    {{-- <img src="..." class="card-img-top" alt="..."> --}}
    <div class="card-body">
      <h5 class="card-title">{{$movieInviato->title}}</h5>
      <p class="card-text">{{$movieInviato->date}} <br>
        voto {{$movieInviato->vote}}</p>
    </div>
  </div>

</div>
@endsection
