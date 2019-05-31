<?php

namespace App\Http\Controllers;

use App\buses;
use App\classes;
use App\students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students= students::with('classes','buses')->get();
       // $class= classes::all();
        //$bus= buses::all();

        return view('students.students',compact('students'));
    }

    public function add(){

        $class= classes::all();
        $bus= buses::all();
        return view('students\addStudents',compact('class','bus'));
    }

    public function create(Request $request)
    {
        $request->validate([

            'name'=>'required|max:10',
            'email'=>'required',
            'password'=>'required|min:5'

        ]);

        $student =new students();
        $student->name =$request->name ;
        $student->email =$request->email ;
        $pass=md5($request->passwored);
        $student->pass =$pass ;
        $student->c_id =$request->class ;
        $student->b_id =$request->bus ;
        $student->save();

        return redirect('/Students')->with('status', 'Student was created !');
    }

    public function edit($id){

        $student=students::where('sid',$id)->first();
        $class= classes::all();
        $bus= buses::all();
        return view('students\editStudents',compact('student','class','bus'));
    }

    public function update(Request $request , $id)
    {
        $request->validate([

            'name'=>'required|max:10',
            'email'=>'required',
            'password'=>'required|min:5'

        ]);

        $student=students::where('sid','=',$id)->first();
        $student->name = $request->name ;
        $student->email =$request->email ;
        $pass=md5($request->password);
        $student->pass =$pass ;
        $student->c_id =$request->class ;
        $student->b_id =$request->bus ;

        //return $student;

        $student->save();

        return redirect('/Students')->with('status', 'Student was updated !');
    }

    public function delete($id){

        $student=students::where('sid',$id)->first();
        $student->delete();
        return redirect('/Students')->with('status', 'Student was Deleted !');
    }
}

?>
