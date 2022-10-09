@extends('admin.layouts.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="invoice p-3 mb-3">
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> Cars
                                    <a class="btn btn-primary btn-sm" href="{{ route('car.create') }}">Add</a>
                                </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Model</th>
                                            <th>Photo</th>
                                            <th>Year</th>
                                            <th>Number</th>
                                            <th>Color</th>
                                            <th>Transmission</th>
                                            <th>Rental price per day</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cars as $car)
                                            <tr>
                                                <td>{{ $car->id }}</td>
                                                <td>{{ $car->model->name }}</td>
                                                <td><img src="{{ $car->photo }}" width="100"></td>
                                                <td>{{ $car->year }}</td>
                                                <td>{{ $car->number }}</td>
                                                <td>{{ $car->color }}</td>
                                                <td>{{ $car->transmission }}</td>
                                                <td>{{ $car->rental_price_per_day }}</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="{{ route('car.edit', $car->id) }}">
                                                        <i class="fas fa-pencil-alt"></i>Edit
                                                    </a>
                                                    <form style="display: inline-table" action="{{ route('car.destroy', $car->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Delete</button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $cars->links('admin.pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
