@extends('layouts.dashboard')
@section('content')
<main id="main" class="main">
<div class="pagetitle">
      <h1>Tiket</h1>
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
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">List Tiket</h5>
              <p> 
              <a href="/dashboard/tiket/create" class="btn btn-primary">
              <i class="bi bi-plus"></i> Tiket Baru
                </a>
              </p>
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
                    <th scope="col">Aksi</th>
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
                      <td>{{$row->selisih}} Hari</td>
                      <td>
                        @if($row->status == 1)
                          <a href="/dashboard/tiket/edit/{{$row->id}}" class="btn btn-warning"><i class="bi bi-pencil"></i></a> <a href="#" onclick="deleteTiket({{$row}})" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                          <a href="/dashboard/tiket/progress/{{$row->id}}" class="btn btn-success"> Progress </a> <a href="/dashboard/tiket/close/{{$row->id}}" class="btn btn-primary"> Close </a>
                        @else
                        <a class="btn btn-warning" disabled><i class="bi bi-pencil"></i></a> <a href="#" onclick="return false" class="btn btn-danger" disabled><i class="bi bi-trash"></i></a>
                          <a href="/dashboard/tiket/progress/{{$row->id}}" class="btn btn-success"> Progress </a> <a href="/dashboard/tiket/close/{{$row->id}}" class="btn btn-primary"> Close </a>
                        @endif
                    </td>
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


