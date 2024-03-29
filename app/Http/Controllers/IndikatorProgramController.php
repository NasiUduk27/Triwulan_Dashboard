<?php

namespace App\Http\Controllers;

use App\Models\Indikator_program;
use App\Models\Master_program;
use Illuminate\Http\Request;

class IndikatorProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('indikator_program')){
            $indikator_program = Indikator_program::where('nama_program', 'LIKE', $request->indikator_program.'%')->paginate(2)->withQueryString();
        }else{
            $indikator_program = Indikator_program::paginate(2);
        }
        return view('indikator_program.indprogram', [
            'indikator_program' => $indikator_program
        ]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $master_program = Master_program::all();

        return view('indikator_program.create_indikator_program')
                    ->with('url_form', url('/indikator_program'))
                    ->with('master_program', $master_program);
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
            'nama_program' => 'required',
            'indikator' => 'required',
            'target' => 'required|numeric',
            'satuan' => 'required',
            'pagu' => 'required|numeric',
        ]);

        // $data = Indikator_program::create($request->except(['_token']));
        // return redirect('indikator_program')
        //                 ->with('success', 'Data Indikator Program Berhasil Ditambahkan');
        $cariProgram = Master_program::where('id', $request->nama_program)->first();
        $insert = Indikator_program::create([
            'rekening_program' => $cariProgram->rekening_program,
            'nomor_rekening' => $cariProgram->nomor_rekening,
            'nama_program' => $cariProgram->nama_program,
            'indikator' => $request->input('indikator'),
            'target' => $request->input('target'),
            'satuan' => $request->input('satuan'),
            'pagu' => $request->input('pagu'),
        ]);
        if ($insert) {
            return redirect('indikator_program')
                ->with('success', 'Data Indikator program berhasil disimpan');
        } else {
            return back()->with('error', 'Data Gagal Disimpan');
        }

    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Indikator_program  $indikator_program
     * @return \Illuminate\Http\Response
     */
    public function show(Indikator_program $indikator_program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Indikator_program  $indikator_program
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indikator_program = Indikator_program::find($id);
        $master_program = Master_program::all();
        return view('indikator_program.create_indikator_program')
                    ->with('indikator_program', $indikator_program)
                    ->with('url_form', url('/indikator_program/'. $id))
                    ->with('master_program', $master_program);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Indikator_program  $indikator_program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_program' => 'required|string|max:20',
            'indikator' => 'required|string|max:20',
            'target' => 'required|string|max:20',
            'satuan' => 'required|string|max:20',
            'pagu' => 'required|string|max:20',
        ]);

        $data = Indikator_program::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('indikator_program')
                        ->with('success', 'Data Indikator Program Berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Indikator_program $indikator_program
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Indikator_program::where('id', '=', $id)->delete();
        return redirect('indikator_program')
                        ->with('success', 'data Berhasil Dihapus');
    }

}
