<?php

namespace App\Http\Controllers;

use App\Models\Tenda;
use Illuminate\Http\Request;

class TendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('tenda')){
            $tenda = Tenda::where('merk_tenda', 'LIKE', $request->tenda.'%')->paginate(2)->withQueryString();
        }else{
            $tenda = Tenda::paginate(2);
        }
        return view('tenda.tenda', [
            'tenda' => $tenda
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tenda.create_tenda')
                    ->with('url_form', url('/datatenda'));
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
            'merk_tenda' => 'required|string|max:30',
            'kapasitas' => 'required|integer',
            'sewaperhari' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        $data = Tenda::create($request->except(['_token']));
        return redirect('datatenda')
                        ->with('success', 'Data Tenda Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tenda  $tenda
     * @return \Illuminate\Http\Response
     */
    public function show(Tenda $tenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenda  $tenda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tenda = Tenda::find($id);
        return view('tenda.create_tenda')
                    ->with('tenda', $tenda)
                    ->with('url_form', url('/datatenda/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tenda  $tenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'merk_tenda' => 'required|string|max:30',
            'kapasitas' => 'required|integer',
            'sewaperhari' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        $data = Tenda::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('datatenda')
                        ->with('success', 'Data Tenda Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tenda  $tenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tenda::where('id', '=', $id)->delete();
        return redirect('datatenda')
                        ->with('success', 'Tenda Berhasil Dihapus');
    }
}
