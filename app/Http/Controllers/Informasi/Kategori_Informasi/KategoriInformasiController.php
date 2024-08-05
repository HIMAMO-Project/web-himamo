<?php

namespace App\Http\Controllers\Informasi\Kategori_Informasi;

use App\Http\Controllers\Controller;
use App\Models\Kategori_Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriInformasiController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('cari');
    
        $kategoriInformasi = Kategori_Informasi::query();
    
        if ($search) {
            $kategoriInformasi->where('name', 'like', "%{$search}%")
                              ->orWhere('slug', 'like', "%{$search}%");
        }
    
        $kategoriInformasi = $kategoriInformasi->paginate(10);
    
        return view('admin.informasi.kategori_informasi.index', compact('kategoriInformasi'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:kategori_informasis|max:255',
        ]);
    
        Kategori_Informasi::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
        ]);

        return redirect()->route('kategori_informasi.index')->with('success', 'Kategori Informasi created successfully.');
    }

    public function edit(Kategori_Informasi $kategoriInformasi)
    {
        return view('admin.informasi.kategori_informasi.edit', compact('kategoriInformasi'));
    }

    public function update(Request $request, Kategori_Informasi $kategoriInformasi)
    {
        $request->validate([
            'name' => 'required|max:255|unique:kategori_informasis,name,' . $kategoriInformasi->id,
            'slug' => 'required|max:255|unique:kategori_informasis,slug,' . $kategoriInformasi->id,
        ]);

        $kategoriInformasi->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
        ]);

        return redirect()->route('kategori_informasi.index')->with('success', 'Kategori Informasi updated successfully.');
    }
    
    public function destroy(Kategori_Informasi $kategoriInformasi)
    {
        $kategoriInformasi->delete();
        return redirect()->route('kategori_informasi.index')->with('success', 'Kategori Informasi deleted successfully.');
    }
}
