<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class AfrindController extends Controller
    {
        // عرض أصدقاء المستخدم
      
            public function index()
{
    $user = Auth::user();

    // أصدقاؤه الحاليون
    $friends = $user->friends;

    // كل المستخدمين الآخرين (غير المستخدم الحالي)
    $otherUsers = User::where('id', '!=', $user->id)->get();

    // مرّر كلا المتغيرين للـ Blade
    return view('friends', compact('friends', 'otherUsers'));
}

        //     $user = Auth::user();
        //     $friends = $user->friends; // يجلب كل الأصدقاء

        //     return view('friends', compact('friends'));
        // }

        // // إضافة صديق
        // public function addFriend($friend_id)
        // {
        //     $user = Auth::user();
        //     $friend = User::find($friend_id);

        //     if ($friend && !$user->friends->contains($friend->id)) {
        //         $user->friends()->attach($friend->id);
        //         $friend->friends()->attach($user->id); // لجعل العلاقة ثنائية
        //     }

        //     return redirect()->back();
        }
    

    //
    // public function index()
    // {
    //     $user = Auth::user();
    //     $friends = $user->friends; // العلاقة
        

    //     return view('friends', compact('friends'));
    // }


