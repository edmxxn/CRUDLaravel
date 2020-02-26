@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                    Data dosen
                    </div>
                    <div class="card-body">
                        <form action="{{url()->previous()}}" method="post">
                            @csrf
                            <!-- Nama Dosen -->
                            <div class="form-group">
                                <label for="">Nama Dosen</label>
                            <input type="text" name="nama" value="{{$dosen->nama}}" class="form-control" required readonly>
                            </div>
                            <!-- Nomor Induk Pegawai Dosen -->
                            <div class="form-group">
                                <label for="">Nomor Induk Pegawai Dosen</label>
                                <input type="text" name="nipd" value="{{$dosen->nipd}}" class="form-control" required readonly>
                            </div>
                            <!-- Submit -->
                            <div class="form-group">
                            </div>
                        </form>
                        <a href="{{url()->previous()}}" class="btn btn-outline-info">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection