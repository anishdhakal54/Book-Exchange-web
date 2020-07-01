@extends('front::layouts.master')

@section('content')
<div class="container">
    @foreach ($books as $book)
    <div class="card" style="width: 200; height:200">
        <img src="{{asset('storage/'.($book->image))}}" class="img" alt="Responsive image">
  <div class="card-body">
  <h5 class="card-title">{{$book->name}}</h5>
    <p class="card-text">{{$book->description}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endforeach

</div>

@endsection
