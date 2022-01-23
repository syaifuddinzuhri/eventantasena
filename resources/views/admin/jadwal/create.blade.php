@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        Data Jadwal
                        <a href="{{ route('jadwal.index') }}" class="btn btn-sm btn-dark">Kembali</a>
                    </div>
                    <div class="card-body">
                        @if (Session::has('error'))
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert bg-danger text-white">
                                        {{ Session::get('error') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (Session::has('success'))
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert bg-success text-white">
                                        {{ Session::get('success') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <form action="{{ route('jadwal.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="kategori_lomba_id">Example select</label>
                                <select class="form-control" id="kategori_lomba_id" name="kategori_lomba_id">
                                    <option disabled selected>-- Pilih kategori lomba --</option>
                                    @foreach ($data->kategori as $item)
                                        <option value="{{ $item->id }}">{{$item->judul_singkat}}</option>
                                    @endforeach
                                </select>
                                @error('nama')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" class="form-control" name="nama">
                                @error('nama')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" id="deskripsi" class="form-control" name="deskripsi">
                                @error('deskripsi')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="start">Tanggal Mulai</label>
                                        <input type="date" id="start" class="form-control" name="start">
                                        @error('start')
                                            <small class="text-danger mt-1">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="end">Tanggal Selesai</label>
                                        <input type="date" id="end" class="form-control" name="end">
                                        @error('end')
                                            <small class="text-danger mt-1">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
