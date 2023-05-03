<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use App\Models\Compan;
use Illuminate\Http\Request;

class StudentsController extends Controller
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
            $students = Student::with('compan')->get();
    
            return view('students.index', compact('students'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $compans = Compan::all();
            return view('students.create',compact ('compans'));
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
                'prenom' => 'bail|required|string|max:255',
                'cv' => 'bail|required|string|max:255',
                'compan_id' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
            ]);
            $input= $request->all();
            if ($image = $request->file('image')) {
                $destinationPath = 'images/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }
            Student::create($input);
            return redirect(route ("students.index"));
        }
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(Student $student )
        {
            $companys = Compan::all();
            return view('students.show',compact ('compans','student'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit( Student $student)
        {
            $compans = Compan::all();
            return view('students.edit',compact ('compans','student'));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request,Student $student )
        {
            $this->validate($request, [
                'name' => 'bail|required|string|max:255',
                'email' => 'bail|required|string|max:255',
                'prenom' => 'bail|required|string|max:255',
                'cv' => 'bail|required|string|max:255',
                'compan_id' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);
            $input = $request->all();
            if ($image = $request->file('image')) {
                $destinationPath = 'images/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }else{
                unset($input['image']);
            }
            $student->update($input);
            return redirect(route ("students.index"));
       
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(Student $student )
        {
            $student->delete();
            return redirect(route ("students.index"));
        }
}
