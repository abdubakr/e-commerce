<aside class="main-sidebar" xmlns="http://www.w3.org/1999/html">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{$auth->username}}</p>
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
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{route('admin.home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li>
                <a href="{{route('setting.index')}}">
                    <i class="fa fa-cog"></i> <span>Setting</span></a></li>
            <li>
                <a href="{{route('contact.index')}}">
                    <i class="fa fa-envelope"></i> <span>Contact</span></a></li>
            <li class="treeview">
            <a href="">
                <i class="fa fa-group"><span> User</span></i>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class=""><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> Show </a></li>
                <li><a href="{{route('user.create')}}"><i class="fa fa-circle-o"></i> Create </a></li>
            </ul>



            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-sliders"><span> Page</span></i>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{route('page.index')}}"><i class="fa fa-circle-o"></i> Show </a></li>
                    <li><a href="{{route('page.create')}}"><i class="fa fa-circle-o"></i> Create </a></li>
                </ul>



            </li>

            <li class="treeview">
                <a href="">
                    <i class="fa fa-file"><span> Menu</span></i>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{route('menu.index')}}"><i class="fa fa-circle-o"></i> Show </a></li>
                    <li><a href="{{route('menu.create')}}"><i class="fa fa-circle-o"></i> Create </a></li>
                </ul>



            </li>
        </ul>

    </section>
    <!-- /.sidebar -->
</aside>