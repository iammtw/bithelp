@extends('admin.layouts.main')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">Services</h1>
    <div class="card shadow mb-4">
        @if (session('msg'))
            <span class=" mt-2 alert alert-danger"> {{ session('msg') }} </span>
        @endif

        <div class="card-header py-3">
        <a href="{{ url('admin/add-service') }}" class="btn btn-primary" style="float:right"> Add Services </a>
        <h6 class="m-0 font-weight-bold text-primary">All Services</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Exert</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $i=0; ?>
                @foreach ($services as $service)
                <?php $i++; ?>
                <tr>
                    <td> {{$i}} </td>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->extert }}</td>
                    <td>${{ $service->price }}</td>
                    <td>
                        <a href="{{ url('admin/delete-service/'.$service->id) }}" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection