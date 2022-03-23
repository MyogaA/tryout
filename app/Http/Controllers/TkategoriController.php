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
        $data->id_kategori= $request->id_kategori;
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
    public function show($id)
    {
        $data = Tkategori::where('id',$id)->first();
        if ($data) {
            return view('editkategori', ["data" => $data]);
        } else {
            return abort(404);
        }
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
    public function update(Request $request,$id)
    {
        $data = Tkategori::where('id',$id)->first();
        if ($data) {
            $data->id_kategori = $request->id_kategori;
            $data->nama_kategori = $request->nama_kategori;
            $result = $data->save();

            if ($result) {
                return redirect()->route('datakategori');

            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tkategori  $tkategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = Tkategori::where('id',$id)->first();
        if ($data) {
            if ($data->delete()) {
                return redirect()->route('datakategori');
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }
    }
}
