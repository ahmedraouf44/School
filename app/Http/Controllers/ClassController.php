<?php

namespace App\Http\Controllers;

use App\classes;
use App\students;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes= classes::all();

        return view('classes\classes',compact('classes'));
    }

}
