<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
    $students = \App\Models\Student::all(); // ሁሉንም ተማሪዎች አምጣ
    return view('students', compact('students')); // ለ 'students' ገጽ ስጠው
}
}
