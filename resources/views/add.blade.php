@extends('dashboard')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Artikel</h1>
      </div><!-- /.col -->
     <!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
          
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>user_id</th>
                  <th>kategori</th>
                  <th>judul</th>
                  <th>isi</th>
                  <th>gambar</th>
                </tr>
              </thead>
               <tbody>
                 @foreach ($data as $item)
                 <tr> 
                  <td>{{ $item->id_artikel }}</td>
                   <td>{{ $item->user_id }}</td>
                   <td>{{ $item->kategori_id }}</td>
                   <td>{{ $item->judul_artikel }}</td>
                   <td>{{ $item->isi_artikel }}</td>
                   <td>{{ $item->gambar_artikel }}</td>
                   <td>
                    <a href="{{ route('editdata', $id = $item->id) }}"><button class="btn btn-primary">update</button></a>
                    <a href="{{ route('deleteartikel', $id = $item->id) }}"><button class="btn btn-danger">delete</button></a>
                   </td>
                 </tr>
                 @endforeach
               </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>
</section>
@endsection