<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\siswa;
use Illuminate\Http\Request;

class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa=siswa::with('guru')->get();
        return view('datasiswa',['siswa'=>$siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = guru::all();
        return view ('formsiswa',['guru'=>$guru]);
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
            'kelas' => 'required',
            'jurusan' => 'required',
            'nis' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'guru_id' => 'required',
            'point' => 'required'
        ]);

        $input= $request->all();
        siswa::create($input);

        return redirect ('datasiswa')
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
        $siswa =siswa::findOrFail($id);
        return view('siswa_show',['siswa' => $siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $guru= guru::all();


        $siswa = siswa::findOrFail($id);
            return view('editsiswa',['siswa'=>$siswa,'guru'=>$guru]);

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
        $siswa = siswa::findOrFail($id);
        $siswa->nama= $request->nama;
        $siswa->kelas= $request->kelas;
        $siswa->jurusan= $request->jurusan;
        $siswa->nis= $request->nis;
        $siswa->jenis_kelamin= $request->jenis_kelamin;
        $siswa->alamat= $request->alamat;
        $siswa->telephone= $request->telephone;
        $siswa->email= $request->email;
        $siswa->guru_id= $request->guru_id;
        $siswa->point= $request->point;
        $siswa->save();
        return redirect('datasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = siswa::findOrFail($id);
        $siswa->delete();

        return redirect('datasiswa')
        ->with('succes',' data siswa berhasil di hapus');
    }
}
