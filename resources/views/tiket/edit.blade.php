@extends('layouts.dashboard')
@section('content')
<main id="main" class="main">          
    <div class="pagetitle">
      <h1>Update Tiket Baru</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard/home">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Tiket</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Tiket</h5>
              <!-- General Form Elements -->
              <form action="/dashboard/tiket/proses_edit_tiket/{{$data->id}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">No Tiket</label>
                  <div class="col-sm-10">
                    <input type="text" name="no_tiket" class="form-control" value="{{$data->no_tiket}}">
                  </div>
                </div>   
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="datetime-local" name="tanggal_masuk" class="form-control" value="{{$data->tanggal_masuk}}">
                  </div>
                </div>   
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" value="{{$data->nama}}">
                  </div>
                </div> 
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Hp</label>
                  <div class="col-sm-10">
                    <input type="text" name="handphone" class="form-control" value="{{$data->handphone}}">
                  </div>
                </div>   
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" value="{{$data->email}}">
                  </div>
                </div>   
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Isi Pengaduan</label>
                  <div class="col-sm-10">
                  <textarea class="tinymce-editor" name="isi_pengaduan" cols="10">
                  {{$data->isi_pengaduan}}
                  </textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">IP Address</label>
                  <div class="col-sm-10">
                    <input type="text" name="ip_address" class="form-control" value="{{$data->ip_address}}">
                  </div>
                </div>   

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Photo</label>
                  <div class="col-sm-10">
                    <img src="{{url('upload/'.$data->foto)}}" width="250"/>
                  </div>
                </div> 

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Upload File</label>
                  <div class="col-sm-10">
                    <input type="file" name="foto" class="form-control" onchange="loadFile(event)" accept="image/*">
                  </div>
                </div> 

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Preview</label>
                  <div class="col-sm-10">
                    <img src="" id="output" width="250"/>
                  </div>
                </div> 

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Kategori</label>
                  <div class="col-sm-10">
                    <select name="kategori" class="form-control">
                    <option value="00">Pilih Kategori </option>
                        @foreach($kategori as $row)
                          @if($row->id == $data->kategori)
                            <option value="{{$row->id}}" selected>{{$row->nama}} </option>
                          @else
                            <option value="{{$row->id}}">{{$row->nama}} </option>
                          @endif
                        @endforeach
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    &nbsp; <input type="radio" name="status" value="1" checked> &nbsp; New 
                    &nbsp; <input type="radio" name="status" value="2" disabled> &nbsp; On Progress 
                    &nbsp; <input type="radio" name="status" value="3" disabled> &nbsp; Close 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Operator</label>
                  <div class="col-sm-10">
                    <input type="text" name="operator" class="form-control" value="{{$data->operator}}">
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

