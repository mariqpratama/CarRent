@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-6">
                <img src="https://source.unsplash.com/600x300?car" class="img-fluid rounded-start py-2" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h2 class="card-title">{{ $detail->brand }} {{ $detail->model }}</h2>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <p class="card-text">{{ $detail->number_plate }}</p>
                  <p class="card-text">{{ $detail->rental_rate }}</p>
                  <p class="card-text"><a href="#" class="text-decoration-none">{{ $detail->category->name }}</a></p>
                  <p class="card-text"><a href="#" class="text-decoration-none">{{ $detail->passenger->name }}</a></p>
                  <a href="#" class="btn btn-primary">Book Now</a>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection