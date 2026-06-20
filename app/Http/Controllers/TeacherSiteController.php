<?php

namespace App\Http\Controllers;

use App\Models\CourseUser;
use Auth;
use Illuminate\Http\Request;

class TeacherSiteController extends Controller
{
    function index() {
        $user = Auth::user();        
        $coursesCount = $user->courses()->count();
        
        return view('teacher.index', compact('coursesCount'));
    }
}
