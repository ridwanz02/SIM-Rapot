@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('guru.index') }}">Data Guru</a></li>
        <li class="breadcrumb-item"><a href="{{ route('guru.create') }}">Tambah Data guru</a></li>
    </ol>
@endsection
@section('content')

    <div class="container-fluid">
        <h1>Tambah guru</h1>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><strong>Tambah guru</strong> </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('guru.store') }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">Nama Guru</label>
                            <div class="col-md-9">
                                <input class="form-control" id="nama_guru" type="text" name="nama_guru"
                                    placeholder="Masukkan nama guru">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">Jenis Kelamin</label>
                            <div class="col-md-9">
                                <input class="form-control" id="jk" type="text" name="jk"
                                    placeholder="Masukkan jenis kelamin">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">Nomor Telepon</label>
                            <div class="col-md-9">
                                <input class="form-control" id="no_telp" type="number" name="no_telp"
                                    placeholder="Masukkan nomor telepon">
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit"> Tambah guru</button>
                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
