<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $activityLogs = ActivityLog::getActivityLogs()->limit(10)->get();
        return view('dashboard',compact('activityLogs'));
    }
}
