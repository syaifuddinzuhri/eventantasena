@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Data Kontak
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
                        <form action="{{ route('admin.save.kontak') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" id="email" class="form-control" name="email"
                                    value="{{ $data->kontak ? ($data->kontak->email ? $data->kontak->email : '') : '' }}">
                                @error('email')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control" name="phone"
                                    value="{{ $data->kontak ? ($data->kontak->phone ? $data->kontak->phone : '') : '' }}">
                                @error('phone')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="whatsapp">Whatsapp</label>
                                <input type="text" id="whatsapp" class="form-control" name="whatsapp"
                                    value="{{ $data->kontak ? ($data->kontak->whatsapp ? $data->kontak->whatsapp : '') : '' }}">
                                @error('whatsapp')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone_isc">Phone ISC</label>
                                <input type="text" id="phone_isc" class="form-control" name="phone_isc"
                                    value="{{ $data->kontak ? ($data->kontak->phone_isc ? $data->kontak->phone_isc : '') : '' }}">
                                @error('phone_isc')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone_fiqsi">Phone FIQSI</label>
                                <input type="text" id="phone_fiqsi" class="form-control" name="phone_fiqsi"
                                    value="{{ $data->kontak ? ($data->kontak->phone_fiqsi ? $data->kontak->phone_fiqsi : '') : '' }}">
                                @error('phone_fiqsi')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone_osiris">Phone OSIRIS</label>
                                <input type="text" id="phone_osiris" class="form-control" name="phone_osiris"
                                    value="{{ $data->kontak ? ($data->kontak->phone_osiris ? $data->kontak->phone_osiris : '') : '' }}">
                                @error('phone_osiris')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone_gatra">Phone GATRA</label>
                                <input type="text" id="phone_gatra" class="form-control" name="phone_gatra"
                                    value="{{ $data->kontak ? ($data->kontak->phone_gatra ? $data->kontak->phone_gatra : '') : '' }}">
                                @error('phone_gatra')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" id="alamat" class="form-control" name="alamat"
                                    value="{{ $data->kontak ? ($data->kontak->alamat ? $data->kontak->alamat : '') : '' }}">
                                @error('alamat')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="ig">Link Instagram</label>
                                <input type="text" id="ig" class="form-control" name="ig"
                                    value="{{ $data->kontak ? ($data->kontak->ig ? $data->kontak->ig : '') : '' }}">
                                @error('ig')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="youtube">Link Youtube</label>
                                <input type="text" id="youtube" class="form-control" name="youtube"
                                    value="{{ $data->kontak ? ($data->kontak->youtube ? $data->kontak->youtube : '') : '' }}">
                                @error('youtube')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
