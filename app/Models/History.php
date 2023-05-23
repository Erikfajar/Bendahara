<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models;

class History extends Model
{
    protected $table = "histories";
    protected $primaryKey = "id";
    protected $fillable= [
    'id ', 'sumbangan', 'pembayaran1', 'pembayaran2', 'pembayaran3', 'pembayaran4', 'pembayaran5', 'sisa_sumbangan'];

}
