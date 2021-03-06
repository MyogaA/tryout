<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Add;
class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addartikel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Add;
        $data->user_id= $request->user_id;
        $data->kategori_id = $request->kategori_id;
        $data->judul_artikel = $request->judul_artikel;
        $data->isi_artikel = $request->isi_artikel;
        $data->gambar_artikel = $request->gambar_artikel;
        $data->save();
        return redirect()->route('dataartikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Add::where('id',$id)->first();
        if ($data) {
            return view('editdata', ["data" => $data]);
        } else {
            return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Add::where('id',$id)->first();
        if ($data) {
            $data->kategori_id = $request->kategori_id;
            $data->judul_artikel = $request->judul_artikel;
            $data->isi_artikel = $request->isi_artikel;
            $data->gambar_artikel = $request->gambar_artikel;
            $result = $data->save();

            if ($result) {
                return redirect()->route('dataartikel');

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Add::where('id',$id)->first();
        if ($data) {
            if ($data->delete()) {
                return redirect()->route('dataartikel');
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }
    }
}
