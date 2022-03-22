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
                  <th>kategori</th>
                </tr>
              </thead>
               <tbody>
                 @foreach ($data as $item)
                 <tr> 
                  <td>{{ $item->id }}</td>
                   <td>{{ $item->nama_kategori }}</td>
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