@extends('admin.layouts.main')
@section('content')

<div class="container mt-4">
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>
    
          <div class="card shadow mt-4 mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Changed Password</h6>
            </div>
            <div class="card-body">
                
              
            <form action="{{ url('admin/change-password') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for=""> Current Password </label>
                    <input type="password" name="currentPassword"  required class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for=""> New Password </label>
                    <input type="password" name="password" required class="form-control" >
                </div>
                <div>
                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                </div>
            
            </form>


            </div>
          </div>
</div>


          
          @endsection

      
