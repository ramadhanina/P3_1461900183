<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;
use Illuminate\Support\Facades\DB;

class gurucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $guru = DB::table('guru')
        ->select('*')
        ->get();
        return view('guru_0183', ['guru' => $guru]); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('guru_tambah_0183'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        guru::create([
            'nama' => $request->nama,
            'mengajar' => $request->mengajar,
        ]);
     
        return redirect('guru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $guru = guru::find($id);
        return view('guru_edit_0183',['guru' => $guru]);
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
        //
        $guru = guru::find($id);
        $guru->nama = $request->nama;
        $guru->mengajar = $request->mengajar;
        $guru->save();

        return redirect('guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $guru = guru::find($id);
        $guru->delete();

        return redirect('guru');
    }
}
