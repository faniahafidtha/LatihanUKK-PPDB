<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use PDF;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppdbs = ppdb::latest()->paginate(5);
        return view('ppdbs.index',compact('ppdbs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppdbs.create');
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
            'nis' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);
    
        ppdb::create($request->all());
        return redirect()->route('ppdbs.index')
                        ->with('success','Data berhasil ditambahkan');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function show(ppdb $ppdb)
    {
        return view('ppdbs.show',compact('ppdb'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function edit(ppdb $ppdb)
    {
        return view('ppdbs.edit',compact('ppdb'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ppdb $ppdb)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);
    
        $ppdb->update($request->all());
    
        return redirect()->route('ppdbs.index')
                        ->with('success','Data berhasil diupdate');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(ppdb $ppdb)
    {
        $ppdb->delete();
        return redirect()->route('ppdbs.index')
                        ->with('success','Data berhasil dihapus');
    }
  
    public function cetakPpdb()
    {
        $ppdbs = ppdb::get();
        return view('ppdbs.cetak-ppdb',compact('ppdbs'));
    }

}