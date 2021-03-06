@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('absen.index') }}">Data Absen</a></li>
</ol>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Data Absen</div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('absen.update',[$absen->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Siswa ID</label>
                            <div class="col-md-9">
                                <input class="form-control @error('nis') is-invalid @enderror" id="nis" type="number" name="siswa_id" placeholder="@error('nis') {{ $message }} @enderror" value="{{ $absen->siswa_id }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Sakit</label>
                            <div class="col-md-9">
                                <input class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa" type="text" name="sakit" placeholder="@error('nama_siswa') {{ $message }} @enderror" value="{{ $absen->sakit }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Izin</label>
                            <div class="col-md-9">
                                <input class="form-control @error('rombel') is-invalid @enderror" id="rombel" type="text" name="izin" placeholder="@error('rombel') {{ $message }} @enderror" value="{{ $absen->izin }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Alpa</label>
                            <div class="col-md-9">
                                <input class="form-control @error('rombel') is-invalid @enderror" id="rombel" type="text" name="alpha" placeholder="@error('rombel') {{ $message }} @enderror" value="{{ $absen->alpha }}">
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
