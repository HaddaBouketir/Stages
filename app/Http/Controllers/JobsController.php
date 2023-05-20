<?php

namespace App\Http\Controllers;
use App\Models\job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index',compact ('jobs'));
       
    }
    public function create()
    {

        return view('jobs.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|string|max:255',
            'prenom' => 'bail|required|string|max:255',
            'age' => 'bail|required|string|max:255',
            'gender' => 'bail|required|string|max:255',
            'email' => 'bail|required|string|max:255', 
            'adresse' => 'bail|required|string|max:255',
            'cv' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input= $request->all();
        if ($cv = $request->file('cv')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $cv->getClientOriginalExtension();
            $cv->move($destinationPath, $profileImage);
            $input['cv'] = "$profileImage";
        }

        Job::create($input);
        return redirect(route ("jobs.index"));
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect(route ("jobs.index"));
    }
}
