@extends('layouts.main')

@section('container')
<div class="card text-center">
    <div class="card-header">
        Please insert the plate number here
    </div>
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <form action="#" method="post">
                    @csrf
                    <div class="mb-3">
                      <input type="text" class="form-control @error ('number_plate') is-invalid @enderror" id="number_plate" name="number_plate" autofocus required value="{{ old('number_plate') }}">
                      @error('number_plate')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Return</button>
                </form>
            </div>
        </div>
    </div>
    <div class="card-footer text-body-secondary">

    </div>
</div>
@endsection