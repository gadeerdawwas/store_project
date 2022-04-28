<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user">
    <div>
      <p class="app-sidebar__user-name">{{auth()->user()->name}}</p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item active" href="{{route('admin.index')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Company Registered</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{route('admin.companies.index')}}"><i class="icon fa fa-circle-o"></i> Company Registered</a></li>
  
      </ul>
    </li>

    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Famous Registered</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{route('admin.famouses.index')}}"><i class="icon fa fa-circle-o"></i> Famous Registered</a></li>
  
      </ul>
    </li>

    <li class="treeview"><a class="app-menu__item" href="{{route('admin.banks.index')}}" data-toggle="treeview"><i
      class="app-menu__icon fa fa-money"></i><span class="app-menu__label">Bank List</span><i
      class="treeview-indicator fa fa-angle-right"></i></a>


  <ul class="treeview-menu">
    <li><a class="treeview-item" href="{{route('admin.banks.index')}}"><i class="icon fa fa-circle-o"></i> Bank List Name</a></li>

  </ul>
</li>
   
</aside>