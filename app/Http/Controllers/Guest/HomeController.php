<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{

   
    public function index(){
        return view('guest.index',[
            "informasi" => informasi::with(['user'])->orderBy('updated_at', 'asc')->paginate(4),
        ]);
    }

    public function d2mekatronika() {
        return view('guest.prodi.prodi-d2-trmo');
    }

    public function d4mekatronika() {
        return view('guest.prodi.prodi-d4-trmo');
    }

    public function d4otomasi() {
        return view('guest.prodi.prodi-d4-tro');
    }

    public function d4trin() {
        return view('guest.prodi.prodi-d4-trin');
    }
}
