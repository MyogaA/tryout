<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Add;

class AdminController extends Controller
{
    public function index(){
        $data = Add::all();
        return view('add', compact('data'));
    }
    public function artikel()
    {
        return $this->hasMany(Artikel::class);
    }
}
