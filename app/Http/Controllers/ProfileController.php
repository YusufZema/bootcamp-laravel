<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfileController extends Controller
{
    //
    public function index(){
        return view("creytprofie");
    }

 public function store(Request $request)
{
    $data = $request->validate([
        'full_name' => 'required|string',
        'about' => 'nullable|string',
    ]);

    auth()->user()->profile()->updateOrCreate(
        ['user_id' => auth()->id()], // الشرط للبحث عن بروفايل موجود
        $data // البيانات للتحديث أو الإنشاء
    );

    return redirect()->route('profile.show')->with('message', 'Profile updated!');
}



    public function show()
{
    $user = auth()->user(); // جلب المستخدم الحالي
    $profile = $user->profile; // جلب بيانات البروفايل المرتبطة به

    return view('profile', compact('user', 'profile'));
}


}

