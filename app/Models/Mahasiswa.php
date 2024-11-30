<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
  use SoftDeletes;

  protected $table = 'mahasiswas';

  protected $fillable = [
    'nim','nama','telp','email','jenis_kelamin','fakultas_id','dosen_id','matkuls_id',
  ];

  public function fakultas()
  {
    return $this->belongsTo(Fakultas::class, 'fakultas_id');
  }

  public function matkul()
  {
    return $this->belongsTo(MataKuliah::class, 'matkul_id');
  }

  public function dosen()
  {
    return $this->belongsTo(Dosen::class, 'dosen_id');
  }
}
