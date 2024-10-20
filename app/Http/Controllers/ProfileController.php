<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Report; 
<<<<<<< HEAD
use App\Models\Task;
=======
>>>>>>> b7b53cc5a461793e0f850ee97aa4c854db3dcebe

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user(); 
<<<<<<< HEAD
        $tasks = Task::where('parent', 0)->get(); 

        
        $reports = Report::where('user_id', $user->id)->get(); 

        return view('profile.index', compact('user', 'reports', 'tasks'));
=======
        $reports = Report::where('user_id', $user->id)->get(); 

        return view('profile.index', compact('user', 'reports'));
>>>>>>> b7b53cc5a461793e0f850ee97aa4c854db3dcebe
    }
}

