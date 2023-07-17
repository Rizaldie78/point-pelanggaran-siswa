<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class gurucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru=guru::all();
        return view('dataguru',['guru'=>$guru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = guru::all();
        return view ('formguru',['guru'=>$guru]);
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
            'nama' => 'required',
            'nik' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $input= $request->all();
        guru::create($input);

        return redirect ('dataguru')
                ->with('succes','data guru created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru =guru::findOrFail($id);
        return view('guru_show',['guru' => $guru]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = guru::findOrFail($id);
        return view('editguru',['guru'=>$guru]);
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
        $guru = guru::findOrFail($id);
        $guru->nama= $request->nama;
        $guru->nik= $request->nik;
        $guru->jenis_kelamin= $request->jenis_kelamin;
        $guru->alamat= $request->alamat;
        $guru->save();
        return redirect('dataguru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = guru::findOrFail($id);
        $guru->delete();

        return redirect('dataguru')
        ->with('succes',' data guru berhasil di hapus');
    }
}
