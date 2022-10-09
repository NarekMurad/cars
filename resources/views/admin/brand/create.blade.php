@extends('admin.layouts.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    @if(!empty($brand))
                        <form action="{{ route('brand.update', $brand->id) }}" method="post">
                        @method('PUT')
                    @else
                        <form action="{{ route('brand.store') }}" method="post">
                    @endif
                        @csrf
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" id="name" class="form-control" name="name" value="{{ old('name') ?? $brand->name ?? '' }}">
                            </div>
                            <div>@error('name') {{ $message }} @enderror</div>
                        </div>

                        <div class="col-12 mb-3">
                            <input type="submit" value="{{ isset($brand) ? 'Update' : 'Create' }}" class="btn btn-success float-right">
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>
@endsection
