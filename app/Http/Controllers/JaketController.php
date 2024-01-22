<?php

namespace App\Http\Controllers;

use App\Models\Jaket;
use Illuminate\Http\Request;

class JaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('jaket')){
            $jaket = Jaket::where('merk_jaket', 'LIKE', $request->jaket.'%')->paginate(2)->withQueryString();
        }else{
            $jaket = Jaket::paginate(2);
        }    
        return view('jaket.jaket', [
            'jaket' => $jaket
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jaket.create_jaket')
                    ->with('url_form', url('/jaket'));
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
            'merk_jaket' => 'required|string|max:30',
            'warna' => 'required|string|max:20',
            'sewaperhari' => 'required|integer',
        ]);

        $data = Jaket::create($request->except(['_token']));
        return redirect('jaket')
                        ->with('success', 'Data Jaket Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jaket  $jaket
     * @return \Illuminate\Http\Response
     */
    public function show(Jaket $jaket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jaket  $jaket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jaket = Jaket::find($id);
        return view('jaket.create_jaket')
                    ->with('jaket', $jaket)
                    ->with('url_form', url('/jaket/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jaket  $jaket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'merk_jaket' => 'required|string|max:30',
            'warna' => 'required|string|max:20',
            'sewaperhari' => 'required|integer',
        ]);

        $data = Jaket::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('jaket')
                        ->with('success', 'Data Jaket Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jaket  $jaket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jaket::where('id', '=', $id)->delete();
        return redirect('jaket')
                        ->with('success', 'Jaket Berhasil Dihapus');
    }
}