@extends('layouts.master')

@section('content')

    <div class="container" style="padding-top: 50px">
        <div class="container" data-aos="fade-up">
            <h2 class="justify"><b>DETAIL PESERTA SERTIFIKASI</b></h2>
            <hr>

            <p><img class="foto-peserta" style="width: 200px" src="{{ url('foto_peserta/' . $peserta->foto) }}"></p>

            <h3>NIK :</h3>
            <p>{{ $peserta->nik }}</p><br>

            <h3>Nama :</h3>
            <p>{{ $peserta->nama }}</p><br>

            <h3>Jadwal Sertifikasi :</h3>
            <p>{{ $peserta->jadwal }}</p><br>

            <h3>Tempat & tanggal lahir :</h3>
            <p>{{ $peserta->tempat_lahir }},&nbsp{{ $peserta->tgl_lahir }}</p><br>

            <h3>Alamat :</h3>
            <p>{{ $peserta->alamat }}</p><br>

            <h3>Nomor Telepon :</h3>
            <p>{{ $peserta->nohp }}</p><br>

            <h3>Email :</h3>
            <p>{{ $peserta->email }}</p><br>
        </div>

        <a href="/peserta" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
