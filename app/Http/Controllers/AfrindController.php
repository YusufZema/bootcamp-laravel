<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AfrindController extends Controller
{
    // عرض الأصدقاء
    public function index()
    {
        $user = Auth::user();

        $friends = $user->friends;

        $otherUsers = User::where('id', '!=', $user->id)->get();

        return view('friends', compact('friends', 'otherUsers'));
    }

    // إضافة صديق
    public function addFriend($id)
    {
        $user = Auth::user();

        // منع إضافة نفسك
        if ($user->id == $id) {
            return back()->with('error', 'لا يمكنك إضافة نفسك');
        }

        // منع التكرار
        if ($user->friends()->where('friend_id', $id)->exists()) {
            return back()->with('error', 'هذا المستخدم مضاف بالفعل');
        }

        // إضافة ثنائية (صداقة حقيقية)
        $user->friends()->attach($id);
        User::find($id)->friends()->attach($user->id);

        return back()->with('success', 'تمت إضافة الصديق بنجاح');
    }
}
