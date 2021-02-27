@extends('admin.layouts.main')
@section('content')
<div class="row">

  <div class="col-xl-6 col-md-6 offset-3 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div
              class="text-center display-5 font-weight-bold text-primary text-uppercase mb-1"
            >
              Total Services
            </div>
            <div
              class="h5 mb-0 text-center display-5 font-weight-bold text-gray-800"
            >
             {{  App\Service::all()->count() }}
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-md-6 offset-3 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div
              class="text-center display-5 font-weight-bold text-danger text-uppercase mb-1"
            >
              Total Contacts
            </div>
            <div
              class="h5 mb-0 text-center display-5 font-weight-bold text-gray-800"
            >
              {{App\Contact::all()->count()}}
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-users fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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
@endsection
        
            
          

      

   
    


  
  
