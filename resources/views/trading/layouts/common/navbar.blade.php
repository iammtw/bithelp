<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
 <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
   <i class="fa fa-bars"></i>
 </button>

 <span class="mr-2 d-none d-lg-inline ml-auto display-5 btn btn-block btn-secondary"> {{ App\User::find(Auth::id())->name }} </span>
 <a class="mr-2 d-none d-lg-inline ml-auto btn btn-info " style="text-decoration: none" href="#" data-toggle="modal" data-target="#logoutModal">
    Logout
</a>
<a class="mr-2 d-none d-lg-inline btn btn-info" style="text-decoration: none" href="{{ url('admin/profile') }}">
 Profile
</a>

</nav>






<!-- Logout Modal-->
<div
class="modal fade"
id="logoutModal"
tabindex="-1"
role="dialog"
aria-labelledby="exampleModalLabel"
aria-hidden="true"
>
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
      <button
        class="close"
        type="button"
        data-dismiss="modal"
        aria-label="Close"
      >
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      Select "Logout" below if you are ready to end your current session.
    </div>
    <div class="modal-footer">
      <button
        class="btn btn-secondary"
        type="button"
        data-dismiss="modal"
      >
        Cancel
      </button>
      <form action="{{ url('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary" >Logout</button>
      </form>
    </div>
  </div>
</div>
</div>