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
                        <form action="{{ route('admin.update.jadwal', $data->jadwal->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="kategori_lomba_id">Example select</label>
                                <select class="form-control" id="kategori_lomba_id" name="kategori_lomba_id">
                                    <option disabled selected>-- Pilih kategori lomba --</option>
                                    @foreach ($data->kategori as $item)
                                        <option value="{{$item->id}}" {{ $item->id == $data->jadwal->kategori_lomba_id ? 'selected' : '' }}>{{$item->judul_singkat}}</option>
                                    @endforeach
                                </select>
                                @error('nama')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" class="form-control" name="nama"
                                    value="{{ $data->jadwal->nama }}">
                                @error('nama')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" id="deskripsi" class="form-control" name="deskripsi"
                                    value="{{ $data->jadwal->deskripsi }}">
                                @error('deskripsi')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="start">Tanggal Mulai</label>
                                        <input type="date" id="start" class="form-control" name="start"
                                            value="{{ $data->jadwal ? ($data->jadwal->start ? \Carbon\Carbon::parse($data->jadwal->start)->format('Y-m-d') : '') : '' }}">
                                        @error('start')
                                            <small class="text-danger mt-1">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="end">Tanggal Selesai</label>
                                        <input type="date" id="end" class="form-control" name="end"
                                            value="{{ $data->jadwal ? ($data->jadwal->end ? \Carbon\Carbon::parse($data->jadwal->end)->format('Y-m-d') : '') : '' }}">
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
