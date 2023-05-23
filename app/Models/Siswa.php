<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models;

class Siswa extends Model
{
    protected $table = "siswa";
    protected $primaryKey = "id";
    protected $fillable= [
    'id ', 'tanggal', 'nama', 'jurusan', 'sumbangan', 'pembayaran_satu', 'sisa_sumbangan', 'pembayaran_dua', 'sisa_sumbanganDua'];
}
