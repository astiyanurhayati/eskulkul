<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rombels = Rombel::all();
        return view('dashboard.rombel.rombel', compact('rombels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.rombel.create');
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
            'name' => 'required|unique:rombels,name'
        ]);

        Rombel::create([
            'name' => $request->name
        ]);

        return redirect('/dashboard/rombel')->with('success', 'berhasil tambahkan rombel baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function show(Rombel $rombel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function edit(Rombel $rombel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rombel $rombel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rombel $rombel)
    {
        $rombel->delete();
        return back()->with('success', 'Berhasil Hapus Rombel');
    }
}
