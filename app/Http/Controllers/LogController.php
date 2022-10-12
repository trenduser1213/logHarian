<?php

namespace App\Http\Controllers;

use App\Models\log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        // $logs = DB::table('logs')->where('pengirim', $id)->first();
        $logs= log::orderBy('id')->where('pengirim', $id)->get();
        // dd($tes);
        // dd($logs->updated_at);
        return view('log.index')->with('logs',$logs);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['textlog'=>'required']);
        $id = Auth::user()->id;
        $penerima = Auth::user()->bawahan_dari;
        $log = log::create([
            'textlog'=>$request->textlog,
            'pengirim'=>$id,
            'penerima'=>$penerima,
        ]);
        return redirect()->route('logHarian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\log  $log
     * @return \Illuminate\Http\Response
     */
    public function show(log $log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\log  $log
     * @return \Illuminate\Http\Response
     */
    public function edit(log $log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\log  $log
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, log $log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\log  $log
     * @return \Illuminate\Http\Response
     */
    public function destroy(log $log)
    {
        //
    }
}
