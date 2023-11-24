<ul class="sidebar-menu" id="nav-accordion">
    <li>
        <a class="active" href="{{ url('/superadmin/dashboard') }}">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="fa fa-laptop"></i>
            <span>Review</span>
        </a>
        <ul class="sub">
            <li><a  href="{{ url('/superadmin/review') }}">Review Posts</a></li>
        </ul>
    </li>

</ul>
