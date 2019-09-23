<style>
  .user-panel>.image>img{
    max-width: 56px;
    height: 50px;
  }
</style>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
      
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/storage/avatars/{{ $user->avatar }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }} </p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-users"></i> <span>Customers</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">

          @can('Create Customer')
          
            <li><a href="{{ url('/customer/create') }}"><i class="fa fa-circle-o"></i> Add Customer</a></li>
          
          @endcan
          <li><a href="{{ url('/customer/customers') }}"><i class="fa fa-circle-o"></i> View Customers</a></li>
        </ul>
      </li>
      @if(Auth::user()->email == 'admin@admin.com')
      <li class="treeview">
        {{-- <a href="#">
          <i class="fa fa-user"></i>
          <span>Admin Options</span>
          
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('register') }}"><i class="fa fa-circle-o"></i> Register New User</a></li>
        </ul> --}}
        
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage Users</span>
        </a>
        <ul class="treeview-menu">
          
            <li><a href="{{ route('users.create') }}"><i class="fa fa-circle-o"></i>Create New User</a></li>
            <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i>Users List</a></li>
        
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-key"></i>
          <span>Priviledges</span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('roles.index') }}"><i class="fa fa-circle-o"></i>Manage Roles</a></li>
            <li><a href="{{ route('permissions.index') }}"><i class="fa fa-circle-o"></i>Manage Permissions</a></li>
        
        </ul>
      </li>
      </li>
      @endif
      
      
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>