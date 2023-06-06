@extends('layouts.dashboard')
@section('content')
<main id="main" class="main">          
    <div class="pagetitle">
      <h1>Update Progress</h1>
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
              <h5 class="card-title">Update Progress</h5>
              <!-- General Form Elements -->
              <form action="/dashboard/tiket/proses_update_progress" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
                <input type="hidden" name="id_tiket" value="{{$data->id}}">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">No Tiket</label>
                  <div class="col-sm-10">
                    <input type="text" name="no_tiket" class="form-control" value="{{$data->no_tiket}}">
                  </div>
                </div>   

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">No Tanggapan</label>
                  <div class="col-sm-10">
                    <input type="text" name="no_progress" class="form-control">
                  </div>
                </div>   

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tanggal Progress</label>
                  <div class="col-sm-10">
                    <input type="datetime-local" name="tanggal_progress" class="form-control">
                  </div>
                </div>   

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Pengaduan</label>
                  <div class="col-sm-10">
                    <textarea class="tinymce-editor" name="pengaduan" cols="10">
                        {{$data->isi_pengaduan}}
                    </textarea>
                  </div>
                </div>   
                         
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tanggapan</label>
                  <div class="col-sm-10">
                    <textarea class="tinymce-editor" name="tanggapan" cols="10">

                    </textarea>
                  </div>
                </div>   

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    &nbsp; <input type="radio" name="status" value="1" disabled> &nbsp; New 
                    &nbsp; <input type="radio" name="status" value="2" checked> &nbsp; On Progress 
                    &nbsp; <input type="radio" name="status" value="3" disabled> &nbsp; Close 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Operator</label>
                  <div class="col-sm-10">
                    <input type="text" name="operator" class="form-control">
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

