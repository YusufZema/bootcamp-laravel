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
    public function addFriend(User $user)
    {
        $currentUser = Auth::user();

        // منع إضافة نفسك
        if ($currentUser->id === $user->id) {
            return back()->with('error', 'لا يمكنك إضافة نفسك');
        }

        // منع التكرار
        if ($currentUser->friends()->where('friend_id', $user->id)->exists()) {
            return back()->with('error', 'هذا المستخدم مضاف بالفعل');
        }

        // إضافة ثنائية (صداقة حقيقية)
        $currentUser->friends()->syncWithoutDetaching([$user->id]);
        $user->friends()->syncWithoutDetaching([$currentUser->id]);

        return back()->with('success', 'تمت إضافة الصديق بنجاح');
    }
}
