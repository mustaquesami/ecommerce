<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index(){
        $id=Auth::user()->id;
        $admin_info=User::find($id);
        $name = $admin_info->name;
        Session::put('name', $name);
        // dd($admin_info);
        // return view('admin.dashboard', compact('admin_info'));
        return view('admin.dashboard');
    }
}
