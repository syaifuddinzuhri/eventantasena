@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Data Profil Lomba FIQSI
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
                        <form action="{{ route('fiqsi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="judul_singkat">Judul Singkat</label>
                                <input type="text" id="judul_singkat" class="form-control" name="judul_singkat"
                                    value="{{ $data->fiqsi ? ($data->fiqsi->judul_singkat ? $data->fiqsi->judul_singkat : '') : '' }}">
                                @error('judul_singkat')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="judul_panjang">Judul Panjang</label>
                                <input type="text" id="judul_panjang" class="form-control" name="judul_panjang"
                                    value="{{ $data->fiqsi ? ($data->fiqsi->judul_panjang ? $data->fiqsi->judul_panjang : '') : '' }}">
                                @error('judul_panjang')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tema">Tema</label>
                                <input type="text" id="tema" class="form-control" name="tema"
                                    value="{{ $data->fiqsi ? ($data->fiqsi->tema ? $data->fiqsi->tema : '') : '' }}">
                                @error('tema')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="deskripsi" class="form-control" name="deskripsi"
                                    rows="10">{{ $data->fiqsi ? ($data->fiqsi->deskripsi ? $data->fiqsi->deskripsi : '') : '' }}</textarea>
                                @error('deskripsi')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="link_instagram">Link Instagram</label>
                                        <input type="text" id="link_instagram" class="form-control" name="link_instagram"
                                            value="{{ $data->fiqsi ? ($data->fiqsi->link_instagram ? $data->fiqsi->link_instagram : '') : '' }}">
                                        @error('link_instagram')
                                            <small class="text-danger mt-1">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="link_registrasi">Link Registrasi</label>
                                        <input type="text" id="link_registrasi" class="form-control"
                                            name="link_registrasi"
                                            value="{{ $data->fiqsi ? ($data->fiqsi->link_registrasi ? $data->fiqsi->link_registrasi : '') : '' }}">
                                        @error('link_registrasi')
                                            <small class="text-danger mt-1">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="link_berkas">Link Berkas</label>
                                        <input type="text" id="link_berkas" class="form-control" name="link_berkas"
                                            value="{{ $data->fiqsi ? ($data->fiqsi->link_berkas ? $data->fiqsi->link_berkas : '') : '' }}">
                                        @error('link_berkas')
                                            <small class="text-danger mt-1">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_maskot">Nama Maskot</label>
                                <input type="text" id="nama_maskot" class="form-control" name="nama_maskot"
                                    value="{{ $data->fiqsi ? ($data->fiqsi->nama_maskot ? $data->fiqsi->nama_maskot : '') : '' }}">
                                @error('nama_maskot')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_maskot">Deskripsi Maskot</label>
                                <textarea id="deskripsi_maskot" class="form-control" name="deskripsi_maskot"
                                    rows="10">{{ $data->fiqsi ? ($data->fiqsi->deskripsi_maskot ? $data->fiqsi->deskripsi_maskot : '') : '' }}</textarea>
                                @error('deskripsi_maskot')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="{{ $data->fiqsi ? ($data->fiqsi->logo ? $data->fiqsi->logo : '') : '' }}"
                                                class="img-thumbnail w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <div class="form-group">
                                                <label for="logo">Logo</label>
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
                                            <img src="{{ $data->fiqsi ? ($data->fiqsi->maskot ? $data->fiqsi->maskot : '') : '' }}"
                                                class="img-thumbnail w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <div class="form-group">
                                                <label for="maskot">Logo Maskot</label>
                                                <input type="file" id="maskot" class="form-control" name="maskot">
                                                @error('maskot')
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
