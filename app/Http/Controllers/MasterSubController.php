<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Master_kegiatan;
use App\Models\Master_program;
use App\Models\Master_subkegiatan;
use Illuminate\Http\Request;

class MasterSubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('master_subkegiatan')){
            $master_subkegiatan = Master_subkegiatan::where('nama_program', 'LIKE', $request->master_subkegiatan.'%')->paginate(2)->withQueryString();
        }else{
            $master_subkegiatan = Master_subkegiatan::paginate(2);
        }    
        return view('master_subkegiatan.master_subkegiatan', [
            'master_subkegiatan' => $master_subkegiatan
        ]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bidang = Bidang::all();
        $program = Master_program::all();
        $master_kegiatan = Master_kegiatan::all();
        return view('master_subkegiatan.create_master_subkegiatan')
                    ->with('url_form', url('/master_subkegiatan'))
                    ->with('bidang', $bidang)
                    ->with('master_kegiatan', $master_kegiatan)
                    ->with('program', $program);
    }

    
    public function getKegiatan(Request $request)
    {
        $program = $request->get('program');
        $master_kegiatan = Master_kegiatan::where('nama_program', $program)->get();
        return response()->json($master_kegiatan);
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'tahun' => 'required|string',           
            'nama_bidang' => 'required|string',  
            'nomor_rekening' => 'required|string',    
            'nama_program' => 'required',
            'rekening_kegiatan' => 'required|string',
            'nama_kegiatan' => 'required|string',
            'rekening_subkegiatan' => 'required|string',
            'nama_subkegiatan' => 'required|string',
        ]);
        $data = Master_program::where('id', $request->input('nama_program'))->first();
        $data1 = Master_kegiatan::where('id', $request->input('nama_kegiatan'))->first();
        // dd($data1);
        // $data = Master_subkegiatan::create($request->except(['_token']));
        Master_subkegiatan::create([
            'tahun' => $request->input('tahun'),
            'nama_bidang' => $request->input('nama_bidang'),
            'rekening_program' => $data->nomor_rekening,
            'nama_program' => $data->nama_program,
            'rekening_kegiatan' => $data1->rekening_kegiatan,
            'nama_kegiatan' => $data1->nama_kegiatan,
            'rekening_subkegiatan' => $request->input('rekening_subkegiatan'),
            'nama_subkegiatan' => $request->input('nama_subkegiatan'),
        ]);
        return redirect('master_subkegiatan')
                        ->with('success', 'Data SubKegiatan Berhasil Ditambahkan');
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Master_subkegiatan  $master_subkegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Master_subkegiatan $master_subkegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Master_subkegiatan  $master_subkegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bidang = Bidang::all();
        $program = Master_program::all();
        $master_kegiatan = Master_kegiatan::all();
        $master_subkegiatan = Master_subkegiatan::find($id);
        return view('master_subkegiatan.create_master_subkegiatan')
                    ->with('master_subkegiatan', $master_subkegiatan)
                    ->with('url_form', url('/master_subkegiatan/'. $id))
                    ->with('bidang', $bidang)
                    ->with('master_kegiatan', $master_kegiatan)
                    ->with('program', $program);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Master_subkegiatan  $master_subkegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tahun' => 'required|string',           
            'nama_bidang' => 'required|string',  
            'nomor_rekening' => 'required|string',    
            'nama_program' => 'required',
            'rekening_kegiatan' => 'required|string',
            'nama_kegiatan' => 'required|string',
            'rekening_subkegiatan' => 'required|string',
            'nama_subkegiatan' => 'required|string',
        ]);

        $data = Master_program::where('id', $request->input('nama_program'))->first();
        $data1 = Master_kegiatan::where('id', $request->input('nama_kegiatan'))->first();
        $data = Master_subkegiatan::where('id', '=', $id)->update([
            'tahun' => $request->input('tahun'),
            'nama_bidang' => $request->input('nama_bidang'),
            'rekening_program' => $data->nomor_rekening,
            'nama_program' => $data->nama_program,
            'rekening_kegiatan' => $data1->rekening_kegiatan,
            'nama_kegiatan' => $data1->nama_kegiatan,
            'rekening_subkegiatan' => $request->input('rekening_subkegiatan'),
            'nama_subkegiatan' => $request->input('nama_subkegiatan'),
        ]);
        return redirect('master_subkegiatan')
                        ->with('success', 'Data SubKegiatan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Master_subkegiatan  $master_subkegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Master_subkegiatan::where('id', '=', $id)->delete();
        return redirect('master_subkegiatan')
                        ->with('success', 'data Berhasil Dihapus');
    }

}
     