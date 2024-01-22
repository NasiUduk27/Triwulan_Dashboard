<?php

namespace App\Http\Controllers;

use App\Models\Pendaki;
use Illuminate\Http\Request;

class PendakiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('pendaki')) {
            $pendaki = Pendaki::where('nama', 'LIKE', $request->pendaki.'%')->paginate(2)->withQueryString();
        } else {
            $pendaki = Pendaki::paginate(2);
        }
        return view('pendaki.pendaki')->with('pendaki', $pendaki);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendaki.create_pendaki')->with('url_form', url('/pendaki'));
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
            'NIK' => 'required|size:16|unique:pendaki,nik',
            'nama' => 'required|max:50',
            'alamat' => 'required',
            'no_hp' => 'required|size:12',
        ]);

        $data = Pendaki::create($request->except(['_token']));
        return redirect('pendaki')->with('success', 'Data Pendaki Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaki  $Pendaki
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaki $Pendaki)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaki  $Pendaki
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaki = Pendaki::find($id);

        return view('pendaki.create_pendaki')
            ->with('pendaki', $pendaki)
            ->with('url_form', url('/pendaki/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaki  $Pendaki
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'NIK' => 'required|size:16|unique:pendaki,nik',
            'nama' => 'required|max:50',
            'alamat' => 'required',
            'no_hp' => 'required|size:12',
        ]);

        $data = Pendaki::where('id', '=' , $id)->update($request->except(['_token', '_method']));
        return redirect('pendaki')->with('success', 'Data Pendaki Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaki  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pendaki::where('id', '=', $id)->delete();
        return redirect('pendaki')->with('success', 'Data Pendaki Berhasil Dihapus');
    }
}
