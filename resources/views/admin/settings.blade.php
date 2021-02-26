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

        @if ($settings ==null)
        <div class="card-body">
            <form action="{{ url('admin/settings') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for=""> Title </label>
                    <input type="text" name="title"  required class="form-control" id="">
                </div>
                
                <div class="form-group">
                    <label for=""> Tagline </label>
                    <input type="text" name="tagline" required class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for=""> About us (Exert) </label>
                   <textarea name="aboutus" class="form-control" id="" cols="30" rows="5" ></textarea>
                </div>

                <div class="form-group">
                    <label for=""> Services (Exert) </label>
                   <textarea name="services" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for=""> Feedbacks (Exert) </label>
                   <textarea name="feedback" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                </div>
            </form>
        </div>
        @else
        <div class="card-body">
            <form action="{{ url('admin/settings') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for=""> Title </label>
                    <input type="text" name="title"  value="{{ $settings->title }}" required class="form-control" id="">
                </div>
                
                <div class="form-group">
                    <label for=""> Tagline </label>
                    <input type="text" name="tagline" value="{{ $settings->tagline }}" required class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for=""> About us (Exert) </label>
                   <textarea name="aboutus" class="form-control" id="" cols="30" rows="5" >{{ $settings->aboutus }}</textarea>
                </div>

                <div class="form-group">
                    <label for=""> Services (Exert) </label>
                   <textarea name="services" class="form-control" id="" cols="30" rows="5">{{ $settings->services }}</textarea>
                </div>

                <div class="form-group">
                    <label for=""> Feedbacks (Exert) </label>
                   <textarea name="feedback" class="form-control" id="" cols="30" rows="5">{{ $settings->feedback }}</textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                </div>
            </form>
        </div>
        @endif
    </div>
</div>
@endsection