@extends('admin.layouts.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    @if(!empty($car))
                        <form enctype="multipart/form-data" action="{{ route('car.update', $car->id) }}" method="post">
                        @method('PUT')
                    @else
                        <form enctype="multipart/form-data" action="{{ route('car.store') }}" method="post">
                    @endif
                        @csrf
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" class="form-control-file" id="photo" name="photo">
                                @if(!empty($car))
                                    <img src="{{ $car->photo }}" width="100">
                                @endif
                            </div>
                            <div>@error('photo') {{ $message }} @enderror</div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="model">Model</label>
                                <select id="model" class="form-control custom-select" name="model_id">
                                    @foreach($models as $model)
                                        <option @if(isset($car) && $car->model_id == $model->id) selected @endif value="{{ old('model') ?? $model->id }}">{{ $model->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>@error('brand') {{ $message }} @enderror</div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="year">Year</label>
                                <input type="number" id="year" class="form-control" name="year" value="{{ old('year') ?? $car->year ?? '' }}">
                            </div>
                            <div>@error('year') {{ $message }} @enderror</div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="number">Number</label>
                                <input type="text" id="year" class="form-control" name="number" value="{{ old('number') ?? $car->number ?? '' }}">
                            </div>
                            <div>@error('number') {{ $message }} @enderror</div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="color">Color</label>
                                <input type="text" id="color" class="form-control" name="color" value="{{ old('color') ?? $car->color ?? '' }}">
                            </div>
                            <div>@error('color') {{ $message }} @enderror</div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="transmission">Transmission</label>
                                <select id="transmission" class="form-control custom-select" name="transmission">
                                    <option @if(isset($car) && $car->transmission == 'automatic') selected @endif value="automatic">Automatic</option>
                                    <option @if(isset($car) && $car->transmission == 'mechanic') selected @endif value="mechanic">Mechanic</option>
                                </select>
                            </div>
                            <div>@error('brand') {{ $message }} @enderror</div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="rental_price_per_day">Rental price per day</label>
                                <input type="number" id="rental_price_per_day" class="form-control" name="rental_price_per_day" value="{{ old('rental_price_per_day') ?? $car->rental_price_per_day ?? '' }}">
                            </div>
                            <div>@error('rental_price_per_day') {{ $message }} @enderror</div>
                        </div>

                        <div class="col-12 mb-3">
                            <input type="submit" value="{{ isset($car) ? 'Update' : 'Create' }}" class="btn btn-success float-right">
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>
@endsection
