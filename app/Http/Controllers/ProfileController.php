<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfileController extends Controller
{
    //
    public function index(){
        return view("profile");
    }

      public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string',
            'about' => 'nullable|string',
        ]);

        // $all = Profile::create([
        //     "full_name" => $data ["full_name"],
        //     "about" => $data ["about"]
        // ]);
        auth()->user()->profile()->create($data);

        return redirect()->back()->with('message', 'Profile created!');


         //  return response()->json([
            //     'message' => 'User registered successfully',
            //     "user" => $user,
            // ], 201);
    }

}

