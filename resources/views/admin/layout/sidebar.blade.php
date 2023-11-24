<ul class="sidebar-menu" id="nav-accordion">
    <li>
        <a class="active" href="{{ url('/admin/dashboard') }}">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="fa fa-laptop"></i>
            <span>Posts</span>
        </a>
        <ul class="sub">
            <li><a  href="{{ url('/admin/post') }}">Create Post</a></li>
            <li><a  href="{{ url('/admin/list') }}">List</a></li>
        </ul>
    </li>

</ul>
