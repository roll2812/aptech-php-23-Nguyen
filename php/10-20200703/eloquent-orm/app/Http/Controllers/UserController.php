<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        \\ Lấy hết tất cả DÒNG dữ liệu trong table users
        $users = DB::table('users')->get();
        return view ('users.index', [
            'users' => $users
        ]);
    }
    
}
