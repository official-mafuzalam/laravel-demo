<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentHandler extends Controller
{
    function Home()
    {
        return view('administration/home');
    }

    function StudentAdd()
    {
        return view('administration/student_add');
    }
}