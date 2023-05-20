<?php

namespace App\Http\Controllers;
use App\Models\Stage;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use App\Models\Compan;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stages = Stage::with('compan')->get();
        return view('etudiant.index', compact('stages'));
    }
    public function entreprise()
    {
        $students = Student::with('compan')->get();
     return view('entreprise.index', compact('students'));
        return view('entreprise.index');
    }
    public function etudiant()
    {
        $stages = Stage::with('compan')->get();
        return view('etudiant.index', compact('stages'));
      
    }

}
