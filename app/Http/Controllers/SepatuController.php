<?php

namespace App\Http\Controllers;

use App\Models\Sepatu;
use Illuminate\Http\Request;

class SepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('sepatu')){
            $sepatu = Sepatu::where('merk', 'LIKE', $request->sepatu.'%')->paginate(2)->withQueryString();
        }else{
            $sepatu = Sepatu::paginate(2);
        }
        
        return view('sepatu.sepatu')->with('sepatu', $sepatu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sepatu.create_sepatu')->with('url_form', url('/sepatu'));
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
            'merk' => 'required|max:50',
            'ukuran' => 'required|string',
            'warna' => 'required|max:50',
            'harga_sewa' => 'required|string',
        ]);

        $data = Sepatu::create($request->except(['_token']));
        return redirect('sepatu')->with('success', 'Data Sepatu Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sepatu  $sepatu
     * @return \Illuminate\Http\Response
     */
    public function show(Sepatu $sepatu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sepatu  $sepatu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sepatu = Sepatu::find($id);

        return view('sepatu.create_sepatu')
            ->with('sepatu', $sepatu)
            ->with('url_form', url('/sepatu/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sepatu  $sepatu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'merk' => 'required|max:50',
            'ukuran' => 'required|string',
            'warna' => 'required|max:50',
            'harga_sewa' => 'required|string',
        ]);

        $data = Sepatu::where('id', '=' , $id)->update($request->except(['_token', '_method']));
        return redirect('sepatu')->with('success', 'Data Sepatu Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sepatu  $sepatu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sepatu::where('id', '=', $id)->delete();
        return redirect('sepatu')->with('success', 'Data Sepatu Berhasil Dihapus');
    }
}
