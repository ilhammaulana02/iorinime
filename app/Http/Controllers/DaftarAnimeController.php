<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftaranime;

class DaftarAnimeController extends Controller
{
    public function index(){
        return view('daftaranime', [
            "title" => "Daftar Anime",
            "daftaranime" => daftaranime::all()
        ]);
    }
}
