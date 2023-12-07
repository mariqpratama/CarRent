@extends('layouts.main')

@section('container')
<h1>Car Booking</h1>

<div class="col-lg-8">
    <form action="#" method="post">
        @csrf
        <div class="mb-3">
          <label for="date_start" class="form-label">Date Start</label>
          <input type="date" class="form-control @error ('date_start') is-invalid @enderror" id="date_start" name="date_start" autofocus required value="{{ old('date_start') }}">
          @error('date_start')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="date_end" class="form-label">Date End</label>
            <input type="date" class="form-control @error ('date_end') is-invalid @enderror" id="date_end" name="date_end" autofocus required value="{{ old('date_end') }}">
            @error('date_end')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
          </div>
        <button type="submit" class="btn btn-primary">Book</button>
    </form>
</div>

@endsection