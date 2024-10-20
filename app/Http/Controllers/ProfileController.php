<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Report; 

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user(); 
        $reports = Report::where('user_id', $user->id)->get(); 

        return view('profile.index', compact('user', 'reports'));
    }
}

