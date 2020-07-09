<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index() {
        $personal = DB::table('personal')->get();
        return view('hien-thi-personal',[
            'personal' => $personal
        ]);
    }
}
