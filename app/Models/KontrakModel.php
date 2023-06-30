<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontrakModel extends Model
{
    use HasFactory;
    protected $table = 'kontrak';
    protected $fillable = ['tanggal_masuk', 'tanggal_keluar', 'pegawai_id'];
}
