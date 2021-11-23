<?php

namespace App\Http\Controllers;

use App\Models\Meter;
use Illuminate\Http\Request;

class MeterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meters =Meter::all();

        return view('meter',[
            'meters'=>$meters
        ]);
    }

    public function api(){
        return Meter::all(); 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Meter $meter)
    {
        return view('home',[
            'meter'=>$meter
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $uni = Meter::find($id);
        $uni->unit = $request->unit;
        $uni->save();
        return redirect('/');
    }

    public function api_update(Request $request, $id)
    {
        $uni = Meter::find($id);
        $uni->unit = $request->unit;
        $uni->save();
        return 'success';
    }

}
