<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    use HasFactory;
    protected $table = "artikel";
    protected $fillable = ["user_id, judul_artikel, isi_artikel, gambar_artikel, id"];
    protected $data;
   
}
