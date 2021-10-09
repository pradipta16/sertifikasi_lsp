@extends('layouts.master')

@section('content')

    <div class="container" style="padding-top: 90px" data-aos="fade-left">
        <h2 style="text-align: center"><b>PESERTA PENDAFTAR SERTIFIKASI</b></h2><br>
        @if (session('pesan'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">Success</svg>
                <div>
                    {{ session('pesan') }}
                </div>
            </div>
        @endif
        <a href="/peserta/add" class="badge rounded-pill bg-secondary">Tambah Peserta</a> 
        <table class="table table-striped" style="text-align: center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jadwal Sertifikasi</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($peserta as $data)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><img class="foto-peserta" src="{{ url('foto_peserta/' . $data->foto) }}"></td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->nik }}</td>
                        <td>{{ $data->jadwal }}</td>
                        <td>{{ $data->email }}</td>
                        <td></td>
                        <td><a href="/peserta/edit/{{ $data->nik }}"
                                class="badge rounded-pill bg-warning text-dark">Edit</a>
                            <a href="/peserta/delete/{{ $data->nik }}" class="badge rounded-pill bg-danger">Delete</a>
                            <a href="/peserta/detail/{{ $data->nik }}" class="badge rounded-pill bg-success">Detail</a>
                        </td>
                @endforeach
            </tbody>
        </table>
        <div style="padding-top: 20px">
            {{ $peserta->links() }}
            <br>
        </div>
        <br>
    </div>
@endsection
