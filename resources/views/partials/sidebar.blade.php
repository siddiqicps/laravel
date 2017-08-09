<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="fa fa-home"></i> Dashboard</a>
  <ul>
    <li class="{{ $page == 'home' ? 'active' : '' }}"><a href="{{url('/home')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a> </li>
    @role('supadmin'|$user)
    <li class="submenu"> <a href="#"><i class="fa fa-key"></i> <span>Manage Roles</span></a>
      <ul>
        <li class="{{ $page == 'roles' ? 'active' : '' }}"> <a href="{{url('/roles')}}"><i class="fa fa-th"></i> <span>List Roles</span></a> </li>
        <li class="{{ $page == 'roles' ? 'active' : '' }}"> <a href="{{url('/create-role')}}"><i class="fa fa-plus"></i> <span>Create Role</span></a> </li>
      </ul>
    </li>
    @endrole

    @role('supadmin,admin'|$user)
    <li class="submenu"> <a href="#"><i class="fa fa-group"></i> <span>Manage Users</span></a>
      <ul>
        <li class="{{ $page == 'users' ? 'active' : '' }}"> <a href="{{url('/users')}}"><i class="fa fa-th"></i> <span>List Users</span></a> </li>
        <li class="{{ $page == 'users' ? 'active' : '' }}"> <a href="{{url('/create-user')}}"><i class="fa fa-plus"></i> <span>Create User</span></a> </li>
      </ul>
    </li>
    @endrole

    @role('supadmin,admin'|$user)
    <li class="submenu"> <a href="#"><i class="fa fa-group"></i> <span>Manage Clients</span></a>
      <ul>
        <li class="{{ $page == 'users' ? 'active' : '' }}"> <a href="{{url('/clients')}}"><i class="fa fa-th"></i> <span>List Clients</span></a> </li>
        <li class="{{ $page == 'users' ? 'active' : '' }}"> <a href="{{url('client/add')}}"><i class="fa fa-plus"></i> <span>Create Client</span></a> </li>
      </ul>
    </li>
    @endrole

    @role('supadmin,admin'|$user)
    <li class="submenu"> <a href="#"><i class="fa fa-external-link"></i> <span>Manage References</span></a>
      <ul>
        <li class="{{ $page == 'users' ? 'active' : '' }}"> <a href="{{url('/references')}}"><i class="fa fa-th"></i> <span>List References</span></a> </li>
        <li class="{{ $page == 'users' ? 'active' : '' }}"> <a href="{{url('/create-reference')}}"><i class="fa fa-plus"></i> <span>Create Reference</span></a> </li>
      </ul>
    </li>
    @endrole

    @role('supadmin,admin,user,remote'|$user)
    <li class="submenu"> <a href="#"><i class="fa fa-external-link"></i> <span>Manage Cases</span></a>
      <ul>
        <li class="{{ $page == 'users' ? 'active' : '' }}"> <a href="{{url('/cases')}}"><i class="fa fa-th"></i> <span>List Cases</span></a> </li>
        <li class="{{ $page == 'users' ? 'active' : '' }}"> <a href="{{url('/create-case')}}"><i class="fa fa-plus"></i> <span>Create Case</span></a> </li>
      </ul>
    </li>
    @endrole

    @role('supadmin,admin'|$user)
    <li class="submenu"> <a href="#"><i class="fa fa-address-book"></i> <span>Manage Contacts</span></a>
      <ul>
        <li class="{{ $page == 'users' ? 'active' : '' }}"> <a href="{{url('/contacts')}}"><i class="fa fa-th"></i> <span>List Contacts</span></a> </li>
        <li class="{{ $page == 'users' ? 'active' : '' }}"> <a href="{{url('/create-contact')}}"><i class="fa fa-plus"></i> <span>Create Contact</span></a> </li>
      </ul>
    </li>
    @endrole

    <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>
  </ul>
</div>
<!--sidebar-menu-->