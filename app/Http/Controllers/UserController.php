<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser()
    {
        return view('create_user');
    }

    public function index()
    {
        return User::all();

    }

    public function get( Request $request, $id )
    {
        $user=User::where('id',$id)->first();
        return $user;
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'email' => 'required|regex:/^[a-z._%+-]+@[a-z.-]+.[a-z]{2,}$/',
        ]);

        return User::create($request->all());
    }
//
}
