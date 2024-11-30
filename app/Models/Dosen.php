<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dosen extends Model
{
  use SoftDeletes;

  protected $table = 'dosens';

  protected $fillable = [
    'nid','nama','telp','email','jenis_kelamin','fakultas_id','matkuls_id',
  ];

  public function fakultas()
  {
    return $this->belongsTo(Fakultas::class, 'fakultas_id');
  }

  public function matkul()
  {
    return $this->belongsTo(MataKuliah::class, 'matkuls_id');
  }

  public function mahasiswa()
  {
    return $this->hasMany(Mahasiswa::class, 'dosen_id');
  }
}
