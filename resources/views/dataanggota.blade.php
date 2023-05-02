@extends('layout.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
            <a href="/tambahanggota" class="btn btn-success">Tambah</a>

            <div class="row g-3 align-items-center mt-2">
                <div class="col-auto">
                    <input type="search" name="noanggota" id="inputPassword6" class="form-control" aria-describedby="passwordHelpBlock">
                </div>
            </div>
         
            <div class="row">
                @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No Anggota</th>
                            <th scope="col">Dibuat Pada</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $no = 1;
                    @endphp

                    @foreach($data as $index => $row)
                        <tr>
                            <th scope="row">{{ $index + $data->firstItem() }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->jeniskelamin }}</td>
                            <td>{{ $row->noanggota }}</td>
                            <td>{{ $row->created_at->format('D M Y') }}</td>
                            <td>
                                <a href="/deletedata/{{ $row->id }}" class="btn btn-danger">Delete</a>
                                <a href="/tampildata/{{ $row->id }}" class="btn btn-info">Update</a>
                            </td>
                        </tr>
                    @endforeach
                        
                    </tbody>
                </table>    
                {{ $data->links() }}
            </div>
        </div>
</div>


@endsection