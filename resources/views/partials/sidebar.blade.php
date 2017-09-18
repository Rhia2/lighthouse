    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ URL::asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Mariam</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview {{ Request::path() == '/' ? 'active' : '' }}">
          <a href="/">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-vcard-o"></i>
            <span>Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/viewAttendance') }}"><i class="fa fa-circle-o"></i> View All Attendance</a></li>
            <li><a href="{{ url('/addAttendance') }}"><i class="fa fa-circle-o"></i> Add Attendance</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-building"></i>
            <span>Projects</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/viewProject') }}"><i class="fa fa-circle-o"></i> View All Projects</a></li>
            <li><a href="{{ url('/addProject') }}"><i class="fa fa-circle-o"></i> Add Project</a></li>
          </ul>
        </li>
        <li class="treeview {{ Request::path() == 'members/add' ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-users"></i> <span>Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/viewMember') }}"><i class="fa fa-circle-o"></i> View All Members</a></li>
            <li><a href="{{ url('/addMember') }}"><i class="fa fa-circle-o"></i> Add Members</a></li>
          </ul>
        </li>
        <li class="treeview {{ Request::path() == 'konnectArea/view' ? 'active' : '' }}  || {{ Request::path() == 'konnectArea/add' ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-map-marker" ></i> <span>Konnect Areas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::path() == 'konnectArea/view' ? 'active' : '' }}"><a href="{{ url('/viewKonnectArea') }}"><i class="fa fa-circle-o"></i> View All Konnect Areas</a></li>
            <li class="{{ Request::path() == 'konnectArea/add' ? 'active' : '' }}"><a href="{{ url('/addKonnectArea') }}"><i class="fa fa-circle-o"></i> Add Konnect Area</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Reports</span>
          </a>
        </li>
      </ul>
    </section>
  