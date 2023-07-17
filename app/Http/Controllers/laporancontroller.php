<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\siswa;
use App\Models\laporan;
use App\Models\pelanggaran;
use Illuminate\Http\Request;

class laporancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = laporan::with('guru','pelanggaran','siswa')->get();
        
        return view('datalaporan', compact('laporan'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laporan= laporan::all();
        $siswa= siswa::all();
        $guru = guru::all();
        $pelanggaran = pelanggaran::all();
        return view('formlaporan', compact( 'laporan','siswa','guru','pelanggaran'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        $siswa = $request->siswa;
        $pelanggaran = $request->pelanggaran;
        $data = $request->all();
        $check = $this->make($data);
        $siswa = siswa::findOrFail($siswa);
        $pelanggaran = pelanggaran::findOrFail($pelanggaran);
        $point = $siswa->point;
        $point = $pelanggaran->point;
        $point-= $point;
        if($check) {
            $siswa->laporan()->attach($check->nama);
            $siswa->update([
                'point' =>$point
            ]);
        }
        return redirect()->route('datalaporan')
        ->with('success','laporan data created succesfully');

    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function make(array $data)
    {
        return laporan::create([


            'guru_id' => $data['guru_id'],
            'pelanggaran_id' =>  $data['pelanggaran_id'],
          ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laporan=laporan::with('guru','siswa','pelanggaran')->findOrFail($id);
        return view('laporan_show',['laporan'=>$laporan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laporan = laporan::findOrFail($id);
        return view('editlaporan', compact('laporan'));
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
            'guru_id',
            'siswa_id',
            'pelanggaran_id',
        ]);

         $laporan = laporan::findOrFail($id);
        $input = $request->all();
        $laporan->update($input);

        return redirect('datalaporan')
                ->with('success','violation data edit successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laporan = laporan::with('siswa')->findOrFail($id);
        $siswa = siswa::findOrFail($laporan->siswa[0]->id);
        $siswa->laporan()->detach($siswa->id);
        $laporan->delete();
        return redirect()->route('datalaporan')
        ->with('success','report deleted permanently successfully');
    }

}
