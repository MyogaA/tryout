@extends('dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Kategori</h1>
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
              <h3 class="card-title"><Tfoot>Tambah Kategori</Tfoot></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('savedata') }}" id="quickForm">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="kategori">id</label>
                  <input type="text" name="id" class="form-control" id="id" placeholder="Masukkan kategori">
                </div>
                <div class="form-group">
                  <label for="judul">Kategori</label>
                  <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" placeholder="Masukkan judul">
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