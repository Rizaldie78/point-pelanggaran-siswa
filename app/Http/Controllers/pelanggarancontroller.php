<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\pelanggaran;
use Illuminate\Http\Request;

class pelanggarancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggaran=pelanggaran::all();
        return view('jenispelanggaran',['pelanggaran'=>$pelanggaran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggaran = pelanggaran::all();
        $siswa = siswa::all();
        return view ('formpelanggaran',['pelanggaran'=>$pelanggaran, 'siswa'=>$siswa]);
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
            'pelanggaran' => 'required',
            'tindak_lanjut' => 'required',
            'point' => 'required'
        ]);
        $input= $request->all();
        pelanggaran::create($input);

        return redirect ('jenispelanggaran')
                ->with('succes','data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelanggaran =pelanggaran::findOrFail($id);
        return view('pelanggaran_show',['pelanggaran' => $pelanggaran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggaran = pelanggaran::findOrFail($id);
        return view('editpelanggaran',['pelanggaran'=>$pelanggaran]);
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
        $pelanggaran = pelanggaran::findOrFail($id);
        $pelanggaran->pelanggaran= $request->pelanggaran;
        $pelanggaran->tindak_lanjut= $request->tindak_lanjut;
        $pelanggaran->point= $request->point;
        $pelanggaran->save();
        return redirect('jenispelanggaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggaran = pelanggaran::findOrFail($id);
        $pelanggaran->delete();

        return redirect('jenispelanggaran')
        ->with('succes',' data pelanggaran berhasil di hapus');
    }
}
