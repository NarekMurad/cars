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
                                    <i class="fas fa-globe"></i> Models
                                    <a class="btn btn-primary btn-sm" href="{{ route('model.create') }}">Add</a>
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
                                            <th>Brand</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($models as $model)
                                            <tr>
                                                <td>{{ $model->id }}</td>
                                                <td>{{ $model->name }}</td>
                                                <td>{{ $model->brand->name }}</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="{{ route('model.edit', $model->id) }}">
                                                        <i class="fas fa-pencil-alt"></i>Edit
                                                    </a>
                                                    <form style="display: inline-table" action="{{ route('model.destroy', $model->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Delete</button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $models->links('admin.pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
