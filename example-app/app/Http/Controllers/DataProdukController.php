<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DataProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::all();
        return view('dashboard.adminPages.dataproduk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('dashboard.adminPages.dataproduk.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama'=> 'required|max:255',
            'harga'=> 'required|numeric',
            'stockproduk'=> 'required|numeric',
            'foto'=> 'required|image|mimes:jpeg,png,jpg|file|max:2048',
            'kategori_id'=> 'required',
            'deskripsi'=> 'required',
        ]);

        $produks = $request->all();

        if (isset($request->gambar)) {
            $file = $request->file('gambar');
            $nama_file = time() . str_replace(" ", " ", $file->getClientOriginalName());
            $file->move('foto_produk', $nama_file);
            $produk['gambar'] = $nama_file;
        }

        $produks = Produk::create($produks);
        return redirect('/data-produk')->with('berhasil','Produk Mecrame Baru Telah Dibuat!');
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
        $produks = Produk::with(['kategori'])->findOrFail($id);
        $kategoris = Kategori::all();
        return view('dashboard.components.dataproduk.edit',[
            'kategoris' => $kategoris,
            'produks' => $produks
        ]);
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
        $produks = Produk::findOrFail($id);  
        $rules = [
            'nama'=> 'required|max:255',
            'harga'=> 'required|numeric',
            'stockproduk'=> 'required|numeric',
            'kategori_id'=> 'required',
            'deskripsi'=> 'required',
        ];

        $produks = $request->all();

        if (isset($request->gambar)) {
            $file = $request->file('gambar');
            $nama_file = time() . str_replace(" ", " ", $file->getClientOriginalName());
            $file->move('foto_produk', $nama_file);
            $produk['gambar'] = $nama_file;
        }

        // $produks->update($produks);

        return redirect('/data-produk')->with('berhasil', 'Data Produk Telah Diubah!');
    }

       


    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produks = Produk::find($id);
    
        Produk::destroy($id);
        return redirect('/data-produk')->with('berhasil', 'Data Produk Telah Dihapus!');
    }
}
