<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Buku::all();
        return view('buku.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                'buku_kode' => 'bail|required|unique:tb_buku','buku_judul' => 'required'],
            [
                'buku_kode.required' => 'KODE wajib diisi',
                'buku_kode.unique' => 'Kode Buku sudah ada',
                'buku_judul.required' => 'Judul wajib diisi']);
            
            Buku::create([
            'buku_kode' => $request->buku_kode,
            'buku_judul' => $request->buku_judul,
            'buku_kategori' => $request->buku_kategori,
            'buku_penerbit' => $request->buku_penerbit]);
            
            return redirect('buku');
            
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
        $row = Buku::findOrFail($id);
        return view('buku.edit', compact('row'));
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
        $request->validate([
            'buku_kode' => 'bail|required|unique:tb_buku','buku_judul' => 'required'],
            [
            'buku_kode.required' => 'KODE wajib diisi',
            'buku_kode.unique' => 'Kode Buku sudah ada',
            'buku_judul.required' => 'Judul wajib diisi']);
            
            $row = Buku::findOrFail($id);
            $row->update([
            'buku_kode' => $request->buku_kode,
            'buku_judul' => $request->buku_judul,
            'buku_kategori' => $request->buku_kategori,
            'buku_penerbit' => $request->buku_penerbit]);
        
            return redirect('buku');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Buku::findOrFail($id);
        $row->delete();

        return redirect('buku');
    }

    public function search (Request $request)
    {
    $keyword = $request->search;
    $rows = Buku::where('buku_judul','like',"%". $keyword . "%")->paginate(5);
    return view('buku.index',compact('rows'))->with('i',(request()->input('page',1) - 1) * 5);
    }
}
