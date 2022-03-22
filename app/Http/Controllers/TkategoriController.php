<?php

namespace App\Http\Controllers;

use App\Models\Tkategori;
use Illuminate\Http\Request;

class TkategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = Tkategori::all();
        return view('datakategori', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Tkategori;
        $data->id= $request->id;
        $data->nama_kategori = $request->nama_kategori;
        $data->save();
        return redirect()->route('datakategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tkategori  $tkategori
     * @return \Illuminate\Http\Response
     */
    public function show(Tkategori $tkategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tkategori  $tkategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Tkategori $tkategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tkategori  $tkategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tkategori $tkategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tkategori  $tkategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tkategori $tkategori)
    {
        //
    }
}
