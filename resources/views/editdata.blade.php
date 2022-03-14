@extends('dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit artikel</h1>
            <!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"><Tfoot>Edit Data</Tfoot></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('updatedata', $id = $data->id) }}" id="quickForm">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <input type="text" value="{{ $data->kategori_id }}" name="kategori_id" class="form-control" id="kategori" placeholder="Masukkan kategori">
                </div>
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" value="{{ $data->judul_artikel }}"  name="judul_artikel" class="form-control" id="judul" placeholder="Masukkan judul">
                </div>
                <div class="form-group">
                  <label for="isi">Isi</label>
                  <input type="text" value="{{ $data->isi_artikel }}"  name="isi_artikel" class="form-control" id="isi" placeholder="Masukkan isi">
                </div>
                <div method="post" enctype="multipart/form-data" class="form-group">
                  <label for="gambar">Gambar</label>
                  <input type="file" value="{{ $data->gambar_artikel }}"  name="gambar_artikel" class="form-control" id="gambar" placeholder="Masukkan gambar">
                </div>
                <div class="form-group">
                  <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" class="form-control" id="user">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection