@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add New Car</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/cars" method="post">
        @csrf
        <div class="mb-3">
          <label for="brand" class="form-label">Brand</label>
          <input type="text" class="form-control @error ('brand') is-invalid @enderror" id="brand" name="brand" autofocus required value="{{ old('brand') }}">
          @error('brand')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
        </div>
        <div class="mb-3">
          <label for="model" class="form-label">Model</label>
          <input type="text" class="form-control @error ('model') is-invalid @enderror" id="model" name="model" required value="{{ old('model') }}">
          @error('model')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
        </div>
        <div class="mb-3">
          <label for="number_plate" class="form-label">Plate Number</label>
          <input type="text" class="form-control @error ('number_plate') is-invalid @enderror" id="number_plate" name="number_plate" required value="{{ old('number_plate') }}">
          @error('number_plate')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error ('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
          @error('slug')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
        </div>
        <div class="mb-3">
          <label for="rental_rate" class="form-label">Rental Rate</label>
          <input type="text" class="form-control @error ('rental_rate') is-invalid @enderror" id="rental_rate" name="rental_rate" required value="{{ old('rental_rate') }}">
          @error('rental_rate')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Rental Type</label>
            <select name="category_id" class="form-select">
                @foreach ($categories as $category)
                @if (old('category_id') == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else 
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="passenger" class="form-label">Number of Passengers</label>
            <select name="passenger_id" class="form-select">
                @foreach ($passengers as $passenger)
                @if (old('category_id') == $category->id)
                    <option value="{{ $passenger->id }}" selected>{{ $passenger->name }}</option>
                @else 
                    <option value="{{ $passenger->id }}">{{ $passenger->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection