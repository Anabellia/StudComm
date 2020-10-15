<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        //$students = Student::all();
        //$students = Student::where('grade', 4)->get();
        //$students = Student::latest()->get(); 
        //ovo ispod sam ja spetljao da samo svoje studente vidi
        $students = Student::where('teacher_id', (auth()->user()->id))->get();             
        
        return view('students.index', ['students' => $students]);

    }

    public function show($id){
        $student  = Student::find($id);
        //dd ($student);
        if(!$student)
            return redirect('/students');
        elseif ($student->teacher_id == (auth()->user()->id))
            return view('students.show', ['student' => $student]);
        else
            return redirect('/students');            
    }

    public function create(){
       
        return view('students.create');
    }

    public function store(){        

        $student = new Student();
        $student->teacher_id = auth()->user()->id;
        $student->name =request('name', "");
        $student->grade =request('grade');
        $student->about_student =request('about_student', "");
        $student->used_comments ="";
        $student->gender =request('gender', "Others");
        //$student->categories =request('categories');

        //huh probam sad slider
        $student->Introduction =request('Introduction');
        $student->Behavior =request('Behavior');
        $student->Speaking =request('Speaking');
        $student->Reading =request('Reading');
        $student->Writing =request('Writing');
        $student->Listening =request('Listening');
        $student->Comprehension =request('Comprehension');
        $student->Subject =request('Subject');
        $student->Conclusion =request('Conclusion');

        $student->save();
        //dd ($student);
        // add mssge  to the user about new student creation aftr ->
        return redirect('/students')->with('mssg', 'NOTES! You add a new student into your students list - '.$student->name);
    }

    public function edit($id){
        $student  = Student::find($id);        
        return view('students.edit', ['student' => $student]);
    }

    public function update($id){
        /* dd($id); */

        $student  = Student::find($id); 

        $student->name =request('name', "");
        $student->gender =request('gender');
        $student->Introduction =request('Introduction');

        $student->update();

        return redirect('/students');


    }

    //NA UPDATE RECORDS RADIM SAD
    /* public function update($id){
        $student  = Student::find($id);
        Student::update($student->name =request('name', ""));
        return view('/students/2');
    } */

    public function destroy($id){
        $students = Student::findOrFail($id);
        $students->delete();
        return redirect('/students');
    }
}
