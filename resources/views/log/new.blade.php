@extends('layouts.dashboard')
@section('content')
<main id="main" class="main">
<div class="pagetitle">
      <h1>New</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard/home">Home</a></li>
          <li class="breadcrumb-item">Data</li>
          <li class="breadcrumb-item active">Tiket</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">List Tiket</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">No Tiket</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Isi Pengaduan</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Status</th>
                    <th scope="col">Lama Tiket</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $row)
                    <tr>
                      <th scope="row">#{{$row->id}}</th>
                      <td>{{$row->no_tiket}}</td>
                      <td>{{$row->tanggal_masuk}}</td>
                      <td>{{$row->isi_pengaduan}}</td>
                      <td>{{$row->kategori == 1 ? 'IT' : 'NON IT'}}</td>
                      <td>{{$row->status == 1 ? 'New' : ($row->status == 2 ? 'On Progress' : 'Close' )}}  </td>
                      <td>{{$row->umur_tiket}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>  
</main>          
@endsection


