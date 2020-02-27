@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                    Tambah Data hobi
                    </div>
                    <div class="card-body">
                        <form action="{{route('mahasiswa.store')}}" method="post">
                            @csrf
                            <!-- Nama Mahasiswa -->
                            <div class="form-group">
                                <label for="">Nama Mahasiswa</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            {{-- Nomor induk Sekolah --}}
                            <div class="form-group">
                                <label for="">Nomor induk Sekolah</label>
                                <input type="text" name="nim" class="form-control" required>
                            </div>
                            {{-- Nama Dosen --}}
                            <div class="form-group">
                                <label for="">Nama/Id dosen</label>
                            <select name="id_dosen" class="form-control">
                                @foreach ($dosen as $data)
                            <option value="{{$data->id}}">{{$data->nama}}</option>
                                @endforeach
                            </select>
                            </div>
                            <!-- Submit -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection