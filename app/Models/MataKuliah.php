<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MataKuliah extends Model
{
  use SoftDeletes;

  protected $table = 'mata_kuliahs';

  protected $fillable = [
    'kode','nama','sks','semester','periode_id','fakultas_id'
  ];

  public function periode()
  {
    return $this->belongsTo(Periode::class, 'periode_id');
  }

  public function fakultas()
  {
    return $this->belongsTo(Fakultas::class, 'fakultas_id');
  }

  public function dosen()
  {
    return $this->hasMany(Dosen::class, 'matkuls_id');
  }

  public function mahasiswa()
  {
    return $this->hasMany(Mahasiswa::class, 'matkul_id');
  }
}
