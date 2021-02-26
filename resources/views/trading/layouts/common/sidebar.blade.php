<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 <a
   class="sidebar-brand d-flex align-items-center justify-content-center"
href="{{ url('admin/dashboard') }}"
 >
   <div class="sidebar-brand-text mx-3"> DWM </div>
 </a>
 <hr class="sidebar-divider my-0" />
 <li class="nav-item active">
   <a class="nav-link" href="{{ url('admin/dashboard') }}">
     <i class="fas fa-fw fa-tachometer-alt"></i>
     <span>Dashboard</span></a
   >
 </li>

 <hr class="sidebar-divider" />
 <div class="sidebar-heading">
   Works
 </div>

 <!-- Nav Item - Pages Collapse Menu -->



 <li class="nav-item">
  <a
    class="nav-link collapsed"
    href="#"
    data-toggle="collapse"
    data-target="#collapseThree"
    aria-expanded="true"
    aria-controls="collapseThree"
  >
    <i class="fas fa-fw fa-shopping-cart"></i>
    <span>Services</span>
  </a>
  <div
    id="collapseThree"
    class="collapse"
    aria-labelledby="headingTwo"
    data-parent="#accordionSidebar"
  >
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header"> Add / Delete </h6>
      <a class="collapse-item" href="{{ url('admin/add-product') }}">Add Services</a>
      <a class="collapse-item" href=" {{ url('admin/products') }} ">View Services</a>
    </div>
  </div>
</li>



<hr class="sidebar-divider my-0" />

<li class="nav-item">
  <a class="nav-link" href="{{ url('admin/contact') }}">
    <i class="fas fa-fw fa-table"></i>
    <span>Contact Us</span></a
  >
</li>

<li class="nav-item">
  <a class="nav-link" href="{{ url('admin/about') }}">
    <i class="fas fa-fw fa-table"></i>
    <span>About Us</span></a
  >
</li>

</ul>
