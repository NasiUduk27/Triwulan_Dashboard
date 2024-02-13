<?php

namespace App\Http\Controllers;

use App\Models\Jaket;
use App\Models\Master_kegiatan;
use App\Models\Master_program;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master_kegiatan.kegiatan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Master_program::all();

        return view('master_kegiatan.create_kegiatan')
            ->with('url_form', url('/master_kegiatan'))->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $program = Master_program::where($request->program, 'id')->first();

        $insert = Master_kegiatan::create([
            'rekening_program' => $program->rekening_program,
            'nama_program' => $program->nama_program,
            'rekening_kegiatan' => $request->rekening_kegiatan,
            'nama_kegiatan' => $request->nama_kegiatan
        ]);

        if ($insert) {
            return redirect('master_kegiatan');
        } else {
            return back()->with('error', 'Masih Ada Error');
        }
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
