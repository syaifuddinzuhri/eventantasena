@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        Data Partner
                        <a href="{{ route('partner.index') }}" class="btn btn-sm btn-dark">Kembali</a>
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
                        <form action="{{ route('partner.update', $data->partner->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" class="form-control" name="nama"
                                    value="{{ $data->partner->nama }}">
                                @error('nama')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <img src="{{ $data->partner ? ($data->partner->gambar ? $data->partner->gambar : '') : '' }}"
                                        class="img-thumbnail w-100" alt="">
                                </div>
                                <div class="col-9">
                                    <div class="form-group">
                                        <label for="gambar">Gambar</label>
                                        <input type="file" id="gambar" class="form-control" name="gambar">
                                        @error('gambar')
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
