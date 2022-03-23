@extends('dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit kategori</h1>
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
            <form method="POST" action="{{ route('updatekategori', $id = $data->id) }}" id="quickForm">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="id_kategori">id_kategori</label>
                  <input type="text" value="{{ $data->id_kategori }}" name="id_kategori" class="form-control" id="kategori" placeholder="Masukkan kategori">
                </div>
                <div class="form-group">
                  <label for="kategori">kategori</label>
                  <input type="text" value="{{ $data->nama_kategori }}"  name="nama_kategori" class="form-control" id="judul" placeholder="Masukkan judul">
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