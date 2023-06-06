<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/dashboard/home" class="logo d-flex align-items-center">
        <img src="{{asset('assets/img/logo.png')}}" alt="">
        <span class="d-none d-lg-block">SMS</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar"> 
      <!-- <form class="d-flex align-items-center" method="POST" action="/dashboard/anggota/search">
      {{csrf_field()}}
      <input type="date" size=5 value="2023-01-01" name="dari" class="form-control" placeholder="Dari..."> s/d
      <input type="date" size=5 value="2023-12-01" name="ke" class="form-control" placeholder="Sampai..."> &nbsp; 
      <button type="submit" class="btn btn-primary"> <i class="bi bi-search"></i> </button>
      </form> -->
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="/dashboard/profile" title="Pengaturan Akun">
            <i class="bi bi-gear"></i>
            <span class="badge bg-success badge-number"> <i class="bi bi-people"></i></span>
          </a>

        </li>

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" title="Bantuan" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-question-circle"></i>
            <span class="badge bg-warning badge-number"><i class="bi-question-circle"></i></span>
          </a>

        </li>

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Auth::user()->name }}</h6>
              <span>Adminstrator</span>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>


            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->