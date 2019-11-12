<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;


class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DataBuku = Buku::get();
        return view('buku/list', compact('DataBuku'));
    }

    public function add_buku()
    {
        return view('buku/add');
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
        $name = '';
        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
        }

        $buku = new Buku;
        $buku->judul = $request->get('judul');
        $buku->pengarang = $request->get('pengarang');
        $buku->penerbit = $request->get('penerbit');
        $buku->tahun = $request->get('tahun');
        $buku->stok = $request->get('stok');
        $buku->gambar = $name;
        $buku->save();

        return redirect('admin/buku')->with('success', 'Buku berhasil disimpan');
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
    }
}
