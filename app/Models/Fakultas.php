<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fakultas extends Model
{
  use SoftDeletes;

  protected $table = 'fakultas';

  protected $fillable = [
      'fakultas', 'periode_id'
  ];

  public function periode()
  {
    return $this->belongsTo(Periode::class, 'periode_id');
  }

  public function matkul()
  {
    return $this->hasMany(MataKuliah::class, 'fakultas_id');
  }

  public function dosen()
  {
    return $this->hasMany(Dosen::class, 'fakultas_id');
  }
  
  public function mahasiswa()
  {
    return $this->hasMany(Mahasiswa::class, 'fakultas_id');
  }

  
}
