@extends('layouts.main')

@section('container')
<h1 class="text-center mb-3">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/carRental">
      @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      @if (request('passenger'))
          <input type="hidden" name="passenger" value="{{ request('passenger') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

<div class="row justify-content-center">
    @foreach ($posts as $post)
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="/img/car.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">{{ $post->brand }} {{ $post->model }}</h3>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{ $post->rental_rate }}</li>
          <li class="list-group-item"><a href="/carRental?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></li>
          <li class="list-group-item"><a href="/carRental?passenger={{ $post->passenger->slug }}" class="text-decoration-none">{{ $post->passenger->name }}</a></li>
        </ul>
        <div class="card-body">
          <a href="/details/{{ $post->slug }}" class="btn btn-primary">Detail</a>
        </div>
      </div>
    </div>
    @endforeach
</div>

{{ $posts->links('pagination::bootstrap-5') }}

@endsection