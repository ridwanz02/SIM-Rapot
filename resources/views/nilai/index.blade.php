@extends('layouts.app')
@section('third_party_stylesheets')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css') }}">
@endsection
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('nilai.index') }}">Data Nilai</a></li>
    </ol>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">Data nilai
                        <a href="{{ route('nilai.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIS Siswa</th>
                                    <th>Nama Siswa</th>
                                    <th>Rombel</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilai as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->siswa->nis }}</td>
                                    <td>{{ $item->siswa->nama_siswa }}</td>
                                    <td>{{ $item->siswa->rombel }}</td>
                                    <td>
                                        <form action="{{route('nilai.destroy',[$item->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Hapus</button>
                                            <a href="{{route('nilai.show',$item->id)}}" class="btn btn-info btn-sm">Lihat</a>
                                        </td>
                                            
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('third_party_scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js" defer></script>
@endsection
@push('page_scripts')
    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>
@endpush