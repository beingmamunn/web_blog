<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="mx-3 sidebar-brand-text">Web_blog</div>
    </a>

    <!-- Divider -->
    <hr class="my-0 sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if ($page == 'Dashboard') active @endif">
        <a class="nav-link" href={{ route('admin.dashboard') }}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Tables -->
    <li class="nav-item @if ($page == 'Categories') active @endif">
        <a class="nav-link" href={{ route('category.index') }}>
            <i class="fas fa-fw fa-table"></i>
            <span>Category</span></a>
    </li>

    <li class="nav-item @if ($page == 'posts') active @endif">
        <a class="nav-link" href={{ route('post.index') }}>
            <i class="fas fa-fw fa-table"></i>
            <span>Posts</span></a>
    </li>

</ul>
