<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class PegawaiModel extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $fillable = ['nama', 'tanggal_lahir', 'jabatan_id'];

}
