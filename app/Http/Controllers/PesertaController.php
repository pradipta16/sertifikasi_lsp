<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use App\Models\PesertaModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use PDF;


class PesertaController extends Controller
{
    public function __construct()
    {
        $this->PesertaModel = new PesertaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $peserta = PesertaModel::latest();
        
        if(request('search')) {
            $peserta->where('nama', 'like', '%' . request('search') . '%');
        }

        $data = [
            'peserta' => $this->PesertaModel->allData(),
        ];
        return view('peserta', $data);
    }

    public function detail($nik)
    {
        if (!$this->PesertaModel->detailData($nik)) {
            abort(404);
        }

        $data = [
            'peserta' => $this->PesertaModel->detailData($nik),
        ];
        return view('detailPeserta', $data);
    }

    public function add()
    {
        return view('addPeserta');
    }

    public function insert()
    {
        Request()->validate(
            [
                'jadwal' => 'required',
                'nik' => 'required|unique:peserta,nik|min:16|max:16',
                'nama' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'alamat' => 'required',
                'nohp' => 'required',
                'foto' => 'required|mimes:jpg,jpeg,png',
                'email' => 'required',
            ],
        );

        $file = Request()->foto;
        $fileName = Request()->nik . '.' . $file->extension();
        $file->move(public_path('foto_peserta'), $fileName);

        $data = [
            'jadwal' => Request()->jadwal,
            'nik' => Request()->nik,
            'nama' => Request()->nama,
            'tempat_lahir' => Request()->tempat_lahir,
            'tgl_lahir' => Request()->tgl_lahir,
            'alamat' => Request()->alamat,
            'nohp' => Request()->nohp,
            'foto' => $fileName,
            'email' => Request()->email,
        ];

        $this->PesertaModel->addData($data);
        return redirect()->route('peserta')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($nik)
    {
        if (!$this->PesertaModel->detailData($nik)) {
            abort(404);
        }

        $data = [
            'peserta' => $this->PesertaModel->detailData($nik),
        ];
        return view('editPeserta', $data);
    }

    public function update($nik)
    {
        Request()->validate(
            [
                'jadwal' => 'required',
                'nik' => 'required|min:16|max:16',
                'nama' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'alamat' => 'required',
                'nohp' => 'required',
                'foto' => 'mimes:jpg,jpeg,png',
                'email' => 'required',
            ],
        );

        if (Request()->foto <> "") {
            $file = Request()->foto;
            $fileName = Request()->nip . '.' . $file->extension();
            $file->move(public_path('foto_peserta'), $fileName);

            $data = [
                'jadwal' => Request()->jadwal,
                'nik' => Request()->nik,
                'nama' => Request()->nama,
                'tempat_lahir' => Request()->tempat_lahir,
                'tgl_lahir' => Request()->tgl_lahir,
                'alamat' => Request()->alamat,
                'nohp' => Request()->nohp,
                'foto' => $fileName,
                'email' => Request()->email,
            ];

            $this->PesertaModel->editData($nik, $data);
        } else {
            $data = [
                'jadwal' => Request()->jadwal,
                'nik' => Request()->nik,
                'nama' => Request()->nama,
                'tempat_lahir' => Request()->tempat_lahir,
                'tgl_lahir' => Request()->tgl_lahir,
                'alamat' => Request()->alamat,
                'nohp' => Request()->nohp,
                'email' => Request()->email,
            ];

            $this->PesertaModel->editData($nik, $data);
        }


        return redirect()->route('peserta')
            ->with('pesan', 'Data berhasil diperbarui');
    }

    public function delete($nik)
    {
        $this->PesertaModel->deleteData($nik);
        return redirect()->route('peserta')->with('pesan', 'Data berhasil dihapus');
    }

    // public function cetak_pdf(){
    //     $peserta = PesertaModel::all();
    //     $pdf   = PDF::loadview('cetak_pdf', ['peserta' => $peserta]);
    //     return $pdf->download('cetak_pdf.pdf');
    // }

    public function cetak_pdf()
    {
        // retreive all records from db
        $data = PesertaModel::all();

        // share data to view
        view()->share('Peserta', $data);
        $pdf = PDF::loadView('cetak_pdf', $data);

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }
}

