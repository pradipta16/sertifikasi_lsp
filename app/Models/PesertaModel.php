<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PesertaController;

class PesertaModel extends Model
{
 
    public function allData() {
        return DB::table('peserta')->simplePaginate(5);
    }
    
    public function detailData($nik) {
        return DB::table('peserta')->where('nik', $nik)->first();
    }

    public function addData($data) {
        DB::table('peserta')->insert($data);
    }

    public function editData($nik, $data) 
    {
        DB::table('peserta')
        ->where('nik', $nik)
        ->update($data);
    }

    public function deleteData($nik) 
    {
        DB::table('peserta')
        ->where('nik', $nik)
        ->delete();
    }
}
