<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Industri;


class daftarIndustri extends Controller
{
    public function index()
    {
        //mengambil data dari tb_industri semuanya.
        $industri = Industri::all();
        //menampilkan halaman daftar-industri dan passing data insutri.
        return view('daftar-industri/index', ['industri' => $industri]);
    }

    public function tambah_industri(){
        //menampilkan form tambah industri 
        return view('daftar-industri/form_tambah');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //validasi yang akan diinputkan dengan required
        $this->validate($request,[
            'nama'=> 'required',
            'alamat'=> 'required',
            'x'=> 'required',
            'y'=> 'required',
            'foto'=> 'required'
        ]);

        // memasukkan data ke dalam database 
        Industri::create([
            'nama'=> $request->nama,
            'alamat'=>  $request->alamat,
            'x'=>  $request->x,
            'y'=>  $request->y,
            'foto'=>  $request->foto
        ]);

        //redirect ke url daftar-industri 
        return redirect('/daftar-industri');
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
    public function edit($No)
    {
        $industri = Industri::find($No);
        //menampilkan form edit industri 
        return view('daftar-industri/form_edit', ['industri'=> $industri]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $No)
    {
        //
        $this->validate($request,[
            'nama'=> 'required',
            'alamat'=> 'required',
            'x'=> 'required',
            'y'=> 'required',
            'foto'=> 'required'
        ]);

        // memasukkan data ke dalam database 
        $industri = Industri::find($No);
        $industri->nama = $request->nama;
        $industri->alamat = $request->alamat;
        $industri->x = $request->x;
        $industri->y = $request->y;
        $industri->foto = $request->foto;
        $industri->save();
        return redirect('/daftar-industri');
    }

    public function destroy($No)
    {
        //
        $industri = Industri::find($No);
        $industri->delete();
        return redirect('/daftar-industri');
    }
}
