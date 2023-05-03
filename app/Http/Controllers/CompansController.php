<?php

namespace App\Http\Controllers;
use App\Models\Compan;
use Illuminate\Http\Request;

class CompansController extends Controller
{
    public function _construct(){
        $this ->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compans = Compan::all();
        return view('compans.index',compact ('compans'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('compans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|string|max:255',
            'email' => 'bail|required|string|max:255',
           
        ]);
        Compan::create([
            "name" => $request->name,
            "email" => $request->email,
        ]);
      
        return redirect(route ("compans.index"));
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
    public function edit(Compan $compan)
    {

        return view('compans.edit',compact ('compan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compan $compan)
    {
        $this->validate($request, [
            'name' => 'bail|required|string|max:255',
            'email' => 'bail|required|string|max:255',   
        ]);

     
        $compan->update([
            "name" => $request->name,
            "email" => $request->email,
        ]);

        return redirect(route ("compans.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compan $compan)
    {
        $compan->delete();
        return redirect(route ("compans.index"));
    }
}
