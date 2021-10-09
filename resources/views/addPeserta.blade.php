@extends('layouts.master')

@section('content')

    {{-- Registrasi Section --}}
    <div class="container" style="padding-top: 50px">
        {{-- <section id="about" class="about"> --}}
        <div class="container" data-aos="fade-up">
            <h2 class="justify"><b>FORMULIR PENDAFTARAN SERTIFIKASI KOMPETENSI</b></h2>
            <hr>
            <form action="/peserta/insert" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col-md-5" style="margin-bottom: 35px">
                    <label class="form-label">Jadwal Uji Kompetensi</label>
                    <input type="date" name="jadwal" class="form-control" value="{{ old('jadwal') }}">
                    <div class="text-danger">
                        @error('jadwal')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="row g-3">
                    <h2 class="justify"><b>DATA PRIBADI</b></h2>
                    <hr>

                    <div class="col-7">
                        <label class="form-label">NIK</label>
                        <input type="text" class="form-control" name="nik" value="{{ old('nik') }}">
                        <div class="text-danger">
                            @error('nik')
                                {{ $message }}
                            @enderror
                        </div>
                    </div><br>

                    <div class="col-5">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="foto" value="{{ old('foto') }}">
                        <div class="text-danger">
                            @error('foto')
                                {{ $message }}
                            @enderror
                        </div>
                    </div><br>

                    <div class="col-7">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                        <div class="text-danger">
                            @error('nama')
                                {{ $message }}
                            @enderror
                        </div>
                    </div><br>

                    <div class="col-7">
                        <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                        <div class="text-danger">
                            @error('tempat_lahir')
                                {{ $message }}
                            @enderror
                        </div>
                    </div><br>

                    <div class="col-7">
                        <label for="tgllahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" value="{{ old('tgl_lahir') }}">
                        <div class="text-danger">
                            @error('tgl_lahir')
                                {{ $message }}
                            @enderror
                        </div>
                    </div><br>

                    <div class="col-7">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="textarea" class="form-control" name="alamat" value="{{ old('alamat') }}">
                        <div class="text-danger">
                            @error('alamat')
                                {{ $message }}
                            @enderror
                        </div>
                    </div><br>

                    <div class="col-7">
                        <label for="nohp" class="form-label">Nomor Telepon</label>
                        <input type="text" name="nohp" class="form-control" value="{{ old('nohp') }}">
                        <div class="text-danger">
                            @error('nohp')
                                {{ $message }}
                            @enderror
                        </div>
                    </div><br>

                    <div class="col-7" style="margin-bottom: 35px">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                        <div class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-12" style="margin-top: 20pt">
                    <button class="btn btn-dark">Simpan</button>
                </div>
        </div>
        </form>
    </div>
    {{-- </section><!-- End Registrasi Section --> --}}
    </div>

@endsection
