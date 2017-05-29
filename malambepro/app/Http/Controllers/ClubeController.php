<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clube;

class ClubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clubes = Clube::paginate(5);
        if($request->ajax()) {
            return response()->json(view('clube.tabela', compact('clubes'))->render());
        }
        return view('clube.index');
    }

    public function tabela() {
        $clubes = Clube::paginate(5);
        return view('clube.tabela', compact('clubes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('clube.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()) {
            if(Clube::create($request->all())) {
                return response(['msg'=>'insert successsfully']);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response(Clube::find($id));
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
        if($request->ajax()) {
            $clube = Clube::find($id);
            $clube->fill($request->all());
            $clube->save();
            return response(['msg'=>'inserted successfully']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clube::find($id)->delete();
        \Storage::delete(Clube::find($id));
        return response(['id'=>$id]);
    }
}
