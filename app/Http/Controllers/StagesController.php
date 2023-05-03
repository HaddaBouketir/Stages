<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use App\Models\Compan;
use App\Models\Stage;

use Illuminate\Http\Request;

class StagesController extends Controller
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
            $stages = Stage::with('compan')->get();
            return view('stages.index', compact('stages'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $compans = Compan::all();
           
            return view('stages.create',compact ('compans')) ;
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
                'type' => 'bail|required|string|max:255',
                'start' => 'bail|required|string|max:255',
                'finish' => 'bail|required|string|max:255',
              
                'compan_id' => 'required',
           
    
            ]);

            Stage::create([
                'name' =>  $request->name,
                'type' =>  $request->type,
                'start' => $request->start ,
                'finish' => $request->finish,
                'compan_id' => $request->compan_id,
               
            ]);
            return redirect(route ("stages.index"));
           
        }
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(Stage $stage )
        {
            $compans = Compan::all();
            return view('stages.show',compact ('compans','stage'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit( Stage $stage)
        {
            $compans = Compan::all();
            return view('stages.edit',compact ('compans','stage'));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request,Stage $stage )
        {
            $this->validate($request, [
                'name' => 'bail|required|string|max:255',
                'type' => 'bail|required|string|max:255',
                'start' => 'bail|required|string|max:255',
                'finish' => 'bail|required|string|max:255',
                'compan_id' => 'required'
            ]);
            $stage->update([
                'name' =>  $request->name,
                'type' =>  $request->type,
                'start' => $request->start ,
                'finish' => $request->finish,
                'compan_id' => $request->compan_id,
            ]);
          
            return redirect(route ("stages.index"));
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(Stage $stage )
        {
            $stage->delete();
            return redirect(route ("stages.index"));
        }
        public function search(){
            $search_text = $_GET['search'];
            $stages= Stage::where('name','LIKE', '%' .$search_text.'%')->get();
            return view('search',compact('stages'));
        }
}
