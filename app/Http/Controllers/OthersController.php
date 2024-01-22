<?php

namespace App\Http\Controllers;

use App\Models\Jaket;
use App\Models\Others;
use Illuminate\Http\Request;

class OthersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('others')){
            $others = Others::where('nama', 'LIKE', $request->others.'%')->paginate(2)->withQueryString();
        }else{
            $others = Others::paginate(2);
        }
        return view('others.others')->with('others', $others);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('others.create_others')->with('url_form', url('/others'));
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
            'nama' => 'required|max:50',
            'jumlah' => 'required',
            'merk' => 'required|max:50',
        ]);

        $data = Others::create($request->except(['_token']));
        return redirect('others')->with('success', 'Data Others Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Others  $others
     * @return \Illuminate\Http\Response
     */
    public function show(Others $others)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Others  $others
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $others = Others::find($id);

        return view('others.create_others')
            ->with('others', $others)
            ->with('url_form', url('/others/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Others  $others
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:50',
            'jumlah' => 'required',
            'merk' => 'required|max:50',
        ]);

        $data = Others::where('id', '=' , $id)->update($request->except(['_token', '_method']));
        return redirect('others')->with('success', 'Data Others Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Others  $others
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Others::where('id', '=', $id)->delete();
        return redirect('others')->with('success', 'Data Others Berhasil Dihapus');
    }
}
