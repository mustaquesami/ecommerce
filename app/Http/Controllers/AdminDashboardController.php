<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index(){
        // $id=Auth::user()->id;
        // $admin_info=User::find($id);
        // dd($admin_info);
        return view('admin.index');
    }
}
