<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Spintax;
include(app_path().'/Fabrika/testing.php');




class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        //$students = Student::all();
        //$students = Student::where('grade', 4)->get();
        //$students = Student::latest()->get(); 

        //ovak konj mozesh da display na page u blade lako to je moja neka test funcija <div><p>{{$konj}}</p></div>    
        $konj = hello();
        
        //ovo ispod sam ja spetljao da samo svoje studente vidi
        $students = Student::where('teacher_id', (auth()->user()->id))->get();  

        return view('students.index', ['students' => $students, 'konj' => $konj]);
        //ovo dole je old i radilo je ok
        //return view('students.index', ['students' => $students]);
       

    }

    public function show($id){
        $student  = Student::find($id);
        //ovo ce valjda da include moje php scripte ???
        //include(app_path() . '\Fabrika\testing.php');
        //include('App\Fabrika\testing.php');
        //dd ($files1);
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
        
        //validate this form
        $this->validate(request(),[

        'name' => 'required',
        'gender'=> 'required' 

       ]);
        
        $student = new Student();
        $student->teacher_id = auth()->user()->id;
        $student->name =request('name');
        $student->grade =request('grade');
        $student->about_student =request('about_student', "");
        $student->used_comments ="";
        $student->gender =request('gender');
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

        $student  = Student::find($id); 

        $student->name =request('name', "");
        $student->gender =request('gender');
        $student->about_student =request('about_student', "");
        $student->grade =request('grade');
        $student->Introduction =request('Introduction');
        $student->Behavior =request('Behavior');
        $student->Speaking =request('Speaking');
        $student->Reading =request('Reading');
        $student->Writing =request('Writing');
        $student->Listening =request('Listening');
        $student->Comprehension =request('Comprehension');
        $student->Subject =request('Subject');
        $student->Conclusion =request('Conclusion');  

        $student->update();

        
        /* dd ($mazda); */

        //ovo ispod je bilo defoult pa sam hteo da ostanem na edit page zato jer tamo cu comment
        //return redirect('/students')->with('mssg', 'NOTES! You Edited: '.$student->name);

        //opet probam da menjam ostavljam ovde ovaj koji radi kao bckup
        return redirect()->back();

        //testing
        //return view('students.edit')->with(['student' => $student, 'mazda' => $mazda]);
        //return view('test')->with('bladeVar', $controllerVar);
        

    }

    public function destroy($id){
        $students = Student::findOrFail($id);
        $students->delete();
        return redirect('/students');
    }
    
}
