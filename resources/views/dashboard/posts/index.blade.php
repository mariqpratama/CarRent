@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Cars</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-8">
    <a href="/dashboard/cars/create" class="btn btn-primary mb-3">Add New Car</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Brand</th>
          <th scope="col">Model</th>
          <th scope="col">Number Plate</th>
          <th scope="col">Passangers</th>
          <th scope="col">Rental Type</th>
          <th scope="col">Rental Rate</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)  
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->brand }}</td>
                <td>{{ $post->model }}</td>
                <td>{{ $post->number_plate }}</td>
                <td>{{ $post->passenger->name }}</td>
                <td>{{ $post->category->name }}</td>
                <td>{{ $post->rental_rate }}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection