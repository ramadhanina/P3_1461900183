<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kelas;

class kelascontroller extends Controller
{
    //
    public function index(){
        $kelas = DB::table('kelas AS k')
        ->leftjoin('guru AS g','k.id_guru','=','g.id')
        ->leftjoin('siswa AS s','k.id_siswa','=','s.id')
        ->select('k.id as id','g.nama as nama_guru','s.nama as nama_siswa')
        ->get();
        return view('kelas_0183', compact('kelas'));
    }
    public function kelas(){
        $kelas = DB::table('kelas')
        ->join('guru','kelas.id_guru','=','guru.id')
        ->select('nama as nama_guru')
        ->get();

        $class = DB::table('kelas')
        ->union($kelas)
        ->join('siswa','kelas.id_siswa','=','siswa.id')
        ->select('nama as nama_siswa')
        ->get();
        return view('kelas_0183', compact('kelas','class'));
    }
}
