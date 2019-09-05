 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{ asset(Auth::user()->image) }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>{{ Auth::user()->name }}</p> 
      <!-- Status -->
    <a href="javascript:void(0);"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>  

  <!-- search form (Optional) -->
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">  
    <li class="header">HEADER</li> 
    <!-- Optionally, you can add icons to the links -->
    
    <li>
      <a href="{{ route('dashboard') }}"><i class="fa fa-tachometer"></i> 
        <span>Dashboard</span>  
      </a>
    </li>
 
    <li class="{{ (request()->is('users*')) ? 'active' : '' }}">  
      <a href="{{ route('users.index') }}"> 
        <i class="fa fa-users"></i> 
        <span>Manage Users</span>     
      </a>
    </li> 
    
    <li class="{{ (request()->is('permission.index')) ? 'active' : '' }}">
      <a href="{{ route('permission.index') }}"><i class="fa fa-lock"></i> 
        <span>Permissions</span>  
      </a>
    </li>    

    <li class="{{ (request()->is('role.index')) ? 'active' : '' }}">
      <a href="{{ route('role.index') }}"><i class="fa fa-shield"></i> 
        <span>Roles</span>  
      </a>
    </li> 

    <li class="treeview"> 
        <a href="#">
          <i class="fa fa-list"></i> 
          <span>Manage Cagegories</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span> 
        </a>
        <ul class="treeview-menu"> 
            <li>
            <a href="{{ route('category.index') }}">All Categories</a>  
            </li>       
        </ul> 
    </li> 
   
    <li class="treeview">  
        <a href="#">
          <i class="fa fa-cog"></i> 
          <span>Settings</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span> 
        </a>
        <ul class="treeview-menu"> 
            <li><a href="#">Application Information</a></li>       
            <li><a href="#">Social Profiles</a></li>       
            <li><a href="#">Privacy & Policies</a></li>       
            <li><a href="#">Terms & Conditions</a></li>       
            <li><a href="#">Mission and Vision</a></li>       
            <li><a href="#">Meta Tags</a></li>         
        </ul> 
    </li> 

    <li class="header">Reports</li>  
  </ul>
  <!-- /.sidebar-menu --> 
</section>
<!-- /.sidebar -->
</aside>