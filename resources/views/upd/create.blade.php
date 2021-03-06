@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('upd.index') }}">Data upd</a></li>
        <li class="breadcrumb-item"><a href="{{ route('upd.create') }}">Tambah Data upd</a></li>
    </ol>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Nama UPD</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('upd.store') }}" method="post">
                            @csrf

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="select1">Nama Siswa</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="siswa_id" name="siswa_id">
                                        <option value="0">--Pilih Rayon--</option>
                                        @foreach (App\Siswa::all() as $siswa)
                                            <option value="{{ $siswa->id }}">{{ $siswa->nama_siswa }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Nama UPD</label>
                                <div class="col-md-9">
                                    <input class="form-control @error('nama_upd') is-invalid @enderror" id="nama_upd" type="text" name="nama_upd"
                                        placeholder="@error('nama_upd') {{ $message }} @enderror" value="{{ old('nama_upd')}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Nilai UPD</label>
                                <div class="col-md-9">
                                    <input class="form-control @error('nilai_upd') is-invalid @enderror" id="nilai_upd" type="number" name="nilai_upd"
                                        placeholder="@error('nilai_upd') {{ $message }} @enderror" value="{{ old('nilai_upd')}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Simpan Data</button>
                                <button class="btn btn-secondary" type="reset">Reset</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection