<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function users() 
    {
        return view('index', [
            'users' => User::latest()->paginate()
        ]);
    }
}
