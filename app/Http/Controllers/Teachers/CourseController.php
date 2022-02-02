<?php

namespace App\Http\Controllers\Teachers;

use App\Models\Job;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class CourseController extends Controller
{
    public function index()
    {
        if (Gate::denies('manage-courses')) {
            abort(403);
        }

        $jobs = Job::all();

        return view('teacher.jobs.index',compact('jobs'));
    }
}
