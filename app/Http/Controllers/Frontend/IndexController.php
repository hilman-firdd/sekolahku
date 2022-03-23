<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Kegiatan;

class IndexController extends Controller
{
    //Welcome
    public function index()
    {
        // Menu
        $jurusanM = Jurusan::where('is_active','0')->get();
        $kegiatanM = Kegiatan::where('is_active','0')->get();

        return view('frontend.welcome', compact('jurusanM','kegiatanM'));
    }
}