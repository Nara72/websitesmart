<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $fillable = ['kode','namapt','alamat','kategori','ruanglingkup','jumlahlokasi','diterbitkan','berlaku','berakhir','surpertama','surkedua'];

}