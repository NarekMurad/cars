@extends('admin.layouts.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    @if(!empty($model))
                        <form action="{{ route('model.update', $model->id) }}" method="post">
                        @method('PUT')
                    @else
                        <form action="{{ route('model.store') }}" method="post">
                    @endif
                        @csrf
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" id="name" class="form-control" name="name" value="{{ old('name') ?? $model->name ?? '' }}">
                            </div>
                            <div>@error('name') {{ $message }} @enderror</div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <select id="brand" class="form-control custom-select" name="brand_id">
                                    @foreach($brands as $brand)
                                        <option @if(isset($model) && $model->brand_id == $brand->id) selected @endif value="{{ old('brand') ?? $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>@error('brand') {{ $message }} @enderror</div>
                        </div>

                        <div class="col-12 mb-3">
                            <input type="submit" value="{{ isset($model) ? 'Update' : 'Create' }}" class="btn btn-success float-right">
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>
@endsection
