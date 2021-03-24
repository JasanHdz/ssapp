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

    public function search(Request $request) 
    {
        $search = $request->input('search');
        $option = $request->input('option');
        
        if($option == 'name') {
            $users = User::query()
                ->where('name', 'LIKE', "%{$search}%")
                ->orWhere('last_name', 'LIKE', "%{$search}%")
                ->orWhere('second_last_name', 'LIKE', "%{$search}%")
                ->paginate();
    
            return view('index', compact('users'));
        }
        
        $users = User::query()
                ->where('key_one', 'LIKE', "%{$search}%")
                ->orWhere('key_two', 'LIKE', "%{$search}%")
                ->paginate();
    
            return view('index', [
                'users' => $users,
                'query' => $search
            ]);
    }
}
