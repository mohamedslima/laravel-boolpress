<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\userInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        // $user = Auth::user();
        // $userInfo = $user->userInfo;
        $userInfo = userInfo::find(1);
        $user = $userInfo->user;
        return view('admin.home', compact('user', 'userInfo'));
    }
}
