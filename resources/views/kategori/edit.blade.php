@extends('layouts.dashboard')
@section('content')
<main id="main" class="main">          
    <div class="pagetitle">
      <h1>Update Kategori</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard/home">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Kategori</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Kategori</h5>
              <!-- General Form Elements -->
              <form action="/dashboard/kategori/proses_edit_kategori/{{$data->id}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" value="{{$data->nama}}">
                  </div>
                </div>   
                               
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"> </label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </form><!-- End General Form Elements -->
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection

