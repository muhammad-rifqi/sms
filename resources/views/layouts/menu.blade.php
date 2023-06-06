<aside id="sidebar" class="sidebar">

    @if (Auth::guest())   
        
            header("Location: " . URL::to('/'), true, 302);
            exit();
        
    @else

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/dashboard/home">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-shop"></i><span>Tiket</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('/dashboard/tiket')}}">
              <i class="bi bi-circle"></i><span>List Tiket</span>
            </a>
          </li>
          <li>
            <a href="{{url('/dashboard/tiket/new')}}">
              <i class="bi bi-circle"></i><span>New</span>
            </a>
          </li>
          <li>
            <a href="{{url('/dashboard/tiket/onprogress')}}">
              <i class="bi bi-circle"></i><span>On Progress</span>
            </a>
          </li>
          <li>
            <a href="{{url('/dashboard/tiket/done')}}">
              <i class="bi bi-circle"></i><span>Close</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link " href="/dashboard/kategori">
          <i class="bi bi-gear"></i>
          <span>Kategori</span>
        </a>
      </li><!-- End Dashboard Nav -->

    </ul>
    @endif

  </aside><!-- End Sidebar-->
