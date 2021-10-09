<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>

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
        <a href="/peserta/printpdf" target="_blank" class="badge rounded-pill bg-primary">Cetak PDF</a><br>
        <table class="table table-striped" style="text-align: center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>TTL</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Jadwal Sertifikasi</th>
                    <th>Email</th>
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
                        <td>{{ $peserta->tempat_lahir }},&nbsp{{ $peserta->tgl_lahir }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->nohp }}</td>
                        <td>{{ $data->jadwal }}</td>
                        <td>{{ $data->email }}</td>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
