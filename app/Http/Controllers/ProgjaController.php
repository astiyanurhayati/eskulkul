<?php

namespace App\Http\Controllers;

use App\Models\Progja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProgjaController extends Controller
{
   
    public function rekapProgja(){
        $users = User::with(['progja', 'category'])->where('role', 'instructor')->get();
        return view('dashboard.progja.rekap.rekap', compact('users'));
    }

    public function validasi($id){
        Progja::where('id', '=', $id)->update([
            'status' => 1,
        ]);
        return redirect()->back()->with('done', 'Berhasil Validasi');
    }

    public function tolak($id){
        Progja::where('id', '=', $id)->update([
            'status' => 2,
        ]);
        return redirect()->back()->with('done', 'Permintaan Di tolak');
    }
    public function index()
    {

        $progjas = Progja::where('user_id', '=', Auth::user()->id)->get();
        return view('dashboard.progja.index', compact('progjas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.progja.create');
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
            'time' => 'required',
            'document' => 'mimes:doc,docx,pdf,xls,xlxs,ppt,pptx'
        ]);

   
        $document = $request->file('document');
        $document_name = 'DOC' . date('Ymdhis') . '.' . $request->file('document')->getClientOriginalExtension();
        $document->move('document/', $document_name);

        Progja::create([
            'time' => $request->time,
            'document' => $document_name,
            'status' => 0,
            'user_id' => Auth::user()->id,
        ]);
        return redirect('/dashboard/progja')->with('success', 'berhasil upload program kerja');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Progja  $progja
     * @return \Illuminate\Http\Response
     */
    public function show(Progja $progja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Progja  $progja
     * @return \Illuminate\Http\Response
     */
    public function edit(Progja $progja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Progja  $progja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Progja $progja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Progja  $progja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progja $progja)
    {
        //
    }
}
