<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-code"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Laravel <sup>7</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Blog
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.post.index') }}">
        <i class="fas fa-fw fa-newspaper"></i>
        <span>Artikel</span></a>
    </li>


    <!-- Nav Kategori -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.category.index') }}">
        <i class="fas fa-fw fa-list"></i>
        <span>Kategori</span></a>
    </li>

    <!-- Nav Tags -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.tag.index') }}">
        <i class="fas fa-fw fa-tags"></i>
        <span>Tag</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>