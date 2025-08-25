<!-- ======== sidebar-nav start =========== -->
<aside class="sidebar-nav-wrapper">
  <div class="navbar-logo">
    <a href="{{ url('admin/dashboard') }}">
      <img src="https://res.cloudinary.com/dldkoa0wg/image/upload/v1755218582/Collage_Grid_Photos_20240207_093910_0016-removebg-preview_wxnikk.png" style="width: 50px; height: 50px;" alt="logo" />
    </a>
  </div>
  <nav class="sidebar-nav">
    <ul>
      <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <a href="{{ url('admin/dashboard') }}">
          <span class="icon"><i class="lni lni-dashboard"></i></span>
          <span class="text">Dashboard</span>
        </a>
      </li>

      <li class="nav-item {{ request()->is('admin/events*') ? 'active' : '' }}">
        <a href="{{ url('admin/events') }}">
          <span class="icon"><i class="lni lni-calendar"></i></span>
          <span class="text">Events</span>
        </a>
      </li>

      <li class="nav-item {{ request()->is('admin/blogs*') ? 'active' : '' }}">
        <a href="{{ url('admin/blogs') }}">
          <span class="icon"><i class="lni lni-pencil-alt"></i></span>
          <span class="text">Blogs</span>
        </a>
      </li>

      <span class="divider"><hr /></span>

      <li class="nav-item {{ request()->is('admin/profile') ? 'active' : '' }}">
        <a href="{{ url('admin/profile') }}">
          <span class="icon"><i class="lni lni-user"></i></span>
          <span class="text">Profile</span>
        </a>
      </li>
    </ul>
  </nav>
</aside>
<div class="overlay"></div>
<!-- ======== sidebar-nav end =========== -->

<!-- ======== main-wrapper start =========== -->
<main class="main-wrapper">
  <!-- ========== header start ========== -->
  <header class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-6">
          <div class="header-left d-flex align-items-center">
            <div class="menu-toggle-btn mr-15">
              <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                <i class="lni lni-chevron-left me-2"></i> Menu
              </button>
            </div>
          </div>
        </div>

        <div class="col-lg-7 col-md-7 col-6">
          <div class="header-right">
            <!-- profile start -->
            <div class="profile-box ml-15">
              <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                data-bs-toggle="dropdown" aria-expanded="false">
                <div class="profile-info">
                  <div class="info">
                    <div class="image">
                      <img src="{{ asset('assets/images/profile/profile-image.png') }}" alt="profile" />
                    </div>
                    <div>
                      <h6 class="fw-500">{{ Auth::user()->name }}</h6>
                      <p>{{ Auth::user()->role }}</p>
                    </div>
                  </div>
                </div>
              </button>

              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                <li>
                  <div class="author-info flex items-center !p-1">
                    <div class="image">
                      <img src="{{ asset('assets/images/profile/profile-image.png') }}" alt="image">
                    </div>
                    <div class="content">
                      <h4 class="text-sm">{{ Auth::user()->name }}</h4>
                      <a class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white text-xs"
                        href="#">{{ Auth::user()->email }}</a>
                    </div>
                  </div>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="{{ url('admin/profile') }}">
                    <i class="lni lni-user"></i> View Profile
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <form method="GET" action="{{ route('admin-logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">
                      <i class="lni lni-exit"></i> Sign Out
                    </button>
                  </form>
                </li>
              </ul>
            </div>
            <!-- profile end -->
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ========== header end ========== -->
