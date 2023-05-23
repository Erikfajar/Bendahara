<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models;

class Tingkat2 extends Model
{
    protected $table = "tingkat2";
    protected $primaryKey = "id";
    protected $fillable= [
    'id ', 'tanggal', 'nama', 'jurusan', 'tunggakan', 'pembayaran', 'sisa_tunggakan'];
}
