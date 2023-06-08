@extends('layout.main')




@section('content')
<div class="container">
  <h1>cinema</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">date</th>
        <th scope="col">vote</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($movies as $movie )
        <tr>
          <th scope="row">{{$movie->id}}</th>
          <td>{{$movie->title}}</td>
          <td>{{$movie->date}}</td>
          <td>{{$movie->vote}}</td>

        </tr>

      @endforeach

    </tbody>

  </table>

</div>


@endsection
