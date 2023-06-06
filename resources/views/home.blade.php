@extends('layouts.dashboard')

@section('content')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/dashboard/home')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-12">
              <div class="card info-card sales-card">


                <div class="card-body">
                  <h5 class="card-title">Baru <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-shop"></i>
                    </div>
                    <div class="ps-3">
                      <h6> {{$new}} </h6>
                      <span class="text-success small pt-1 fw-bold">  </span> <span class="text-muted small pt-2 ps-1"> Total </span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-12">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">On progress <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-shop"></i>
                    </div>
                    <div class="ps-3">
                      <h6> {{$progress}} </h6>
                      <span class="text-success small pt-1 fw-bold">0</span> <span class="text-muted small pt-2 ps-1"> Total </span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Close <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-shop"></i>
                    </div>
                    <div class="ps-3">
                      <h6> {{$close}} </h6>
                      <span class="text-danger small pt-1 fw-bold">  </span> <span class="text-muted small pt-2 ps-1"> Total </span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            

          </div>
        </div>

      </div>
    </section>

  </main>


@endsection
