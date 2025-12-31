<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Http\Request;

class UsersController extends Controller
{
      public function index()
    {
        return view('regastr');
    }
     public function regastr(Request $request)
    {
        // هنا يمكنك إضافة منطق التسجيل للمستخدم
        $vdata = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15|min:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            "address" => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

    
        


        $user = User::create([
            'name' => $vdata['name'],
            'phone' => $vdata['phone'],
            'email' => $vdata['email'],
            'password' => bcrypt($vdata['password']),
            'address' => $vdata['address'],
            'image' => $imagePath, 
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('users', 'public');
        }

        Auth::login($user); 

        return redirect('dashboard');

          
     }

     public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!auth()->attempt($credentials)) {
            return back()->withErrors([
                'login_error' => 'the provided credentials do not match our records.',
            ]);
        }

        return redirect()->route('dashboard');
    }

    // }
        public function login_view()
    {
        return view('login');
    }

public function logout(Request $request)
{
    auth()->logout(); // تسجيل خروج المستخدم

    $request->session()->invalidate(); // إلغاء الجلسة

    return redirect('/login'); // إعادة التوجيه لصفحة تسجيل الدخول
}
public function logout_view(){
    return view('Settings');
}












   public function dashboard()
{
    $user = auth()->user();

    // جلب التحية من الـ session لو موجودة
    $greeting = session('greeting', ''); 

    return view("dashboard", compact('user', 'greeting'));
}

// public function storeTime(Request $request)
// {
//     $hour = $request->hour;

//     // تحديد التحية
//     $greeting = $hour < 12 ? "good morning" : "good evening";

//     // تخزينها في الـ session
//     session(['greeting' => $greeting]);
// }



//    public function dashboard(){


//        $user = auth()->user();   

//     $hour = Carbon::now()->hour;
//     $greeting = $hour < 12 ? 'صباح الخير' : 'مساء الخير';

//     return view("dashboard", compact('user', 'greeting'));


    // $user = auth()->user();   
    // return view("dashboard", compact('user'));
}

        

