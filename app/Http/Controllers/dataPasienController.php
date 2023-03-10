<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Models\Pasien;
use Illuminate\Http\Request;

class dataPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout.index')->with([
            'data_pasien'=>Pasien::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.create');
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
            'nama'=>'required|min:3',
            'alamat'=>'required|min:3',
            'bb'=>'required|min:1',
            'tb'=>'required|min:1',
            'td'=>'required|min:1',
            'dpm'=>'required|min:1',
        ]);

        $data_pasien = new Pasien;
        $data_pasien ->nama = $request->nama;
        $data_pasien ->alamat = $request->alamat;
        $data_pasien ->bb = $request->bb;
        $data_pasien ->tb = $request->tb;
        $data_pasien ->td = $request->td;
        $data_pasien ->dpm = $request->dpm;
        $data_pasien ->save();

        return to_route('dataPasien.index')->with('succes','Data Berhasil Disimpan');

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
        return view('layout.edit')->with([
            'data_pasien'=>Pasien::find($id),
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
        $request->validate([
            'nama'=>'required|min:3',
            'alamat'=>'required|min:3',
            'bb'=>'required|min:1',
            'tb'=>'required|min:1',
            'td'=>'required|min:1',
            'dpm'=>'required|min:1',
        ]);

        $data_pasien=Pasien::find($id);
        $data_pasien ->nama = $request->nama;
        $data_pasien ->alamat = $request->alamat;
        $data_pasien ->bb = $request->bb;
        $data_pasien ->tb = $request->tb;
        $data_pasien ->td = $request->td;
        $data_pasien ->dpm = $request->dpm;
        $data_pasien ->save();

        return to_route('dataPasien.index')->with('succes','Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_pasien= Pasien::find($id);
        $data_pasien->delete();
        return redirect('/dataPasien');
    }
}
