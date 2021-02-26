@extends('trading.layouts.main')
@section('content')
<div class="row">
  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div
              class="text-center display-5 font-weight-bold text-primary text-uppercase mb-1"
            >
              Total Customers
            </div>
            <div
              class="h5 mb-0 text-center display-5 font-weight-bold text-gray-800"
            >
             {{-- {{  App\User::where('role','customer')->count() }} --}}
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-users fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div
              class="text-center display-5 font-weight-bold text-danger text-uppercase mb-1"
            >
              Total Orders
            </div>
            <div
              class="h5 mb-0 text-center display-5 font-weight-bold text-gray-800"
            >
              {{-- {{App\Order::all()->count()}} --}}
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div
              class="text-center display-5 font-weight-bold text-warning text-uppercase mb-1"
            >
              Total Testers
            </div>
            <div
              class="h5 mb-0 text-center display-5 font-weight-bold text-gray-800"
            >
              {{-- {{App\User::where('role','tester')->count()}} --}}
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-vote-yea fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-secondary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div
              class="text-center display-5 font-weight-bold text-secondary text-uppercase mb-1"
            >
              Total Reports
            </div>
            <div
              class="h5 mb-0 text-center display-5 font-weight-bold text-gray-800"
            >
             {{-- {{App\Contaniner::where('status','1')->count()}} --}}
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-file fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div
              class="text-center display-5 font-weight-bold text-info text-uppercase mb-1"
            >
              Pending Reports
            </div>
            <div
              class="h5 mb-0 text-center display-5 font-weight-bold text-gray-800"
            >
            {{-- {{App\Contaniner::where('status','0')->count()}} --}}
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-file fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div
              class="text-center display-5 font-weight-bold text-info text-uppercase mb-1"
            >
              Total Products
            </div>
            <div
              class="h5 mb-0 text-center display-5 font-weight-bold text-gray-800"
            >
              {{-- {{ App\Product::all()->count() }} --}}
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-file fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
        
            
          

      

   
    


  
  
