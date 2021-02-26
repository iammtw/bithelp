@extends('admin.layouts.main')
@section('content')

<div class="container mt-4">
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>
    @if (session('msg'))
                    <span class=" mt-2 alert alert-success"> {{ session('msg') }} </span>
                @endif
          <div class="card shadow mt-4 mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Your Profile</h6>

            </div>

            <div class="card-body">
                
              
            <form action="{{ url('admin/profile') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for=""> Name </label>
                    <input type="text" name="name" value="{{ $user->name }}" required class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for=""> Email </label>
                    <input type="email" name="email" value="{{ $user->email }}" required class="form-control" id="">
                </div>

                <div class="mb-2">
                <span class="pull-right">Want to Change Password? <a href="{{ url('admin/change-password') }}" >Click Here</a></span>
                </div>

                <div>
                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                </div>
            
            </form>


            </div>
          </div>
</div>


          
          @endsection

      
