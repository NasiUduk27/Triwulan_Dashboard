<?php

namespace App\Http\Controllers;

use App\Models\Indikator_kegiatan;
use App\Models\Tenda;
use Illuminate\Http\Request;

class IndikatorKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        return view('indikator_kegiatan.indkegiatan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Tenda::select('merk_tenda')->get();

        return view('indikator_kegiatan.create_indikator_kegiatan')
            ->with('url_form', url('/indkegiatan'))->with('data', $data);
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
            'kegiatan' => 'required',
            'ind' => 'required',
            'target' => 'required|numeric',
            'satuan' => 'required',
            'anggar' => 'required|numeric',
        ]);

        Indikator_kegiatan::create([
            'kegiatan' => $request->input('kegiatan'),
            'ind' => $request->input('ind'),
            'target' => $request->input('target'),
            'satuan' => $request->input('satuan'),
            'anggar' => $request->input('anggar'),
            // ... tambahkan kolom lainnya sesuai kebutuhan
        ]);

        return redirect()->route('indkegiatan')
            ->with('success', 'Data Indikator Kegiatan berhasil disimpan');
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
        //
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
