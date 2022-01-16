@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Data Profil Antasena
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
                        <form action="{{ route('save.profil') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" id="judul" class="form-control" name="judul"
                                    value="{{ $data ? ($data->judul ? $data->judul : '') : '' }}">
                                @error('judul')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tema">Tema</label>
                                <input type="text" id="tema" class="form-control" name="tema"
                                    value="{{ $data ? ($data->tema ? $data->tema : '') : '' }}">
                                @error('tema')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Kegiatan</label>
                                <textarea id="deskripsi" class="form-control" name="deskripsi"
                                    rows="10">{{ $data ? ($data->deskripsi ? $data->deskripsi : '') : '' }}</textarea>
                                @error('deskripsi')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="start">Tanggal Mulai</label>
                                        <input type="date" id="start" class="form-control" name="start"
                                            value="{{ $data ? ($data->start ? \Carbon\Carbon::parse($data->start)->format('Y-m-d') : '') : '' }}">
                                        @error('start')
                                            <small class="text-danger mt-1">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="end">Tanggal Selesai</label>
                                        <input type="date" id="end" class="form-control" name="end"
                                            value="{{ $data ? ($data->end ? \Carbon\Carbon::parse($data->end)->format('Y-m-d') : '') : '' }}">
                                        @error('end')
                                            <small class="text-danger mt-1">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Footer</label>
                                <textarea id="deskripsi" class="form-control" name="deskripsi_footer"
                                    rows="5">{{ $data ? ($data->deskripsi_footer ? $data->deskripsi_footer : '') : '' }}</textarea>
                                @error('deskripsi_footer')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="{{ $data ? $data->logo ? $data->logo : '' : '' }}" class="img-thumbnail w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <div class="form-group">
                                                <label for="logo">Logo Kegiatan</label>
                                                <input type="file" id="logo" class="form-control" name="logo">
                                                @error('logo')
                                                    <small class="text-danger mt-1">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="{{ $data ? $data->logo_favicon ? $data->logo_favicon : '' : '' }}" class="img-thumbnail w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <div class="form-group">
                                                <label for="logo_favicon">Logo Favicon Web</label>
                                                <input type="file" id="logo_favicon" class="form-control"
                                                    name="logo_favicon">
                                                @error('logo_favicon')
                                                    <small class="text-danger mt-1">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="{{ $data ? $data->logo_web ? $data->logo_web : '' : '' }}" class="img-thumbnail w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <div class="form-group">
                                                <label for="logo_web">Logo Web</label>
                                                <input type="file" id="logo_web" class="form-control" name="logo_web">
                                                @error('logo_web')
                                                    <small class="text-danger mt-1">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
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
