<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tkategori extends Model
{
    use HasFactory;
    protected $table = "kategori";
    protected $fillable = ["id,id_kategori nama_kategori"];
    protected $data;
}
