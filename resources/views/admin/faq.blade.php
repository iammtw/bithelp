@extends('admin.layouts.main')
@section('content')
<div class="container mt-4">
    @if (session('msg'))
        <span class=" mt-2 alert alert-success"> {{ session('msg') }} </span>
    @endif
    <div class="card shadow mt-4 mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Settings</h6>
        </div>

        <div class="card-body">
            <form action="{{ url('admin/faq') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for=""> Question </label>
                    <input type="text" name="question" required class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for=""> Answer </label>
                   <textarea name="answer" class="form-control" required cols="30" rows="5"></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                </div>
            </form>
        </div>
       
    </div>
</div>
@endsection