<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use App\Models\Kategori_Informasi;
use Illuminate\Http\Request;

class guestInformasiController extends Controller
{


    public function informasi(){
        return view('guest.informasi.index',[
            "informasi" => Informasi::with(['kategori_informasi','user'])->orderBy('updated_at', 'asc')->paginate(12),
            'kategori_informasi' => Kategori_Informasi::with(['informasi'])->get(),
        ]);
    }
    
    public function show(Informasi $informasi){
        return view('guest.informasi.detail', [
            'informasi' => $informasi->load('kategori_informasi','user'), 
            'kategori_informasi' => Kategori_Informasi::with(['informasi'])->get(), 
        ]);
    }
}
