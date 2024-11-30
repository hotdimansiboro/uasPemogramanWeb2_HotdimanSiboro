<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Periode extends Model
{
  use SoftDeletes;

  protected $table = 'periodes';

  protected $fillable = [
    'tahun',
    'semester',
    'status'
  ];

  public function fakultas()
  {
    return $this->hasMany(Fakultas::class, 'periode_id');
  }
  public function matkul()
  {
    return $this->hasMany(MataKuliah::class, 'periode_id');
  }
}
