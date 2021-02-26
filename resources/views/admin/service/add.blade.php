@extends('admin.layouts.main')
@section('content')
<div class="container mt-4">
    <h1 class="h3 mb-4 text-gray-800">Service</h1>
    @if (session('msg'))
        <span class=" mt-2 alert alert-success"> {{ session('msg') }} </span>
    @endif
    <div class="card shadow mt-4 mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Service</h6>
        </div>

        <div class="card-body">
            <form action="{{ url('admin/add-service') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for=""> Title </label>
                    <input type="text" name="title"  required class="form-control" id="">
                </div>
                
                <div class="form-group">
                    <label for=""> Extert </label>
                    <input type="text" name="extert" required class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for=""> Description </label>
                   <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for=""> Icon name </label>
                    <input type="text" name="icon" required class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for=""> Price </label>
                    <input type="number" name="price" required class="form-control" id="">
                </div>

                <div>
                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection