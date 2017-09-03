<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $data = ['name'=>'Punyawee Jaroentao', 'id'=>'58160216', 'studying'=>'computer science'];
        return view('profileView', $data);
    }
}
