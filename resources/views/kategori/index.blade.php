@extends('layouts.dashboard')
@section('content')
<main id="main" class="main">
<div class="pagetitle">
      <h1>Kategori</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard/home">Home</a></li>
          <li class="breadcrumb-item">Data</li>
          <li class="breadcrumb-item active">Kategori</li>
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
              <h5 class="card-title">List Kategori</h5>
              <p> 
              <a href="/dashboard/kategori/create" class="btn btn-primary">
              <i class="bi bi-plus"></i> Kategori Baru
                </a>
              </p>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $row)
                    <tr>
                      <th scope="row">#{{$row->id}}</th>
                      <td>{{$row->nama}}</td>
                      <td>
                      <a href="/dashboard/kategori/edit/{{$row->id}}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                      <a href="/dashboard/kategori/delete/{{$row->id}}" class="btn btn-danger" onclick="return confirm('Are You Sure ??')"><i class="bi bi-trash"></i></a>
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


