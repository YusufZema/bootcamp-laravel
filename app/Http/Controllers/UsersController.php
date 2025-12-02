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
            'phons' => 'required|string|max:15',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            "address" => 'required|string|max:255',
            
        ]);

        //التحقق ما اذا كان البريد الإلكتروني موجودًا سابقان
       
        if (isset($vdata['email']) && User::where('email', $vdata['email'])->exists()) {
            return response()->json([
                'message' => 'The email has already been taken.', //رسال الخطأاذا كان موجود 
            ], 422);
        }
        

        // حفظ المستخدم في قاعدة البيانات
        $user = User::create([
            'name' => $vdata['name'],
            'phons' => $vdata['phons'],
            'email' => $vdata['email'],
            'password' => bcrypt($vdata['password']),
            'address' => $vdata['address'],
        ]);
        
        Auth::login($user); //  تسجيل دخول بعد التسجيل مباشرة

        return redirect('dashboard');

            //  return response()->json([
            //     'message' => 'User registered successfully',
            //     "user" => $user,
            // ], 201);
     }
      public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($data)) {
            return redirect('dashboard');
        }else{
            return redirect('regastr');
        }

        return back()->withErrors(['message' => 'Invalid credentials']);
    }
        public function login_view()
    {
        return view('login');
    }











   public function dashboard()
{
    $user = auth()->user();

    // جلب التحية من الـ session لو موجودة
    $greeting = session('greeting', ''); 

    return view("dashboard", compact('user', 'greeting'));
}

public function storeTime(Request $request)
{
    $hour = $request->hour;

    // تحديد التحية
    $greeting = $hour < 12 ? 'صباح الخير' : 'مساء الخير';

    // تخزينها في الـ session
    session(['greeting' => $greeting]);
}



//    public function dashboard(){


//        $user = auth()->user();   

//     $hour = Carbon::now()->hour;
//     $greeting = $hour < 12 ? 'صباح الخير' : 'مساء الخير';

//     return view("dashboard", compact('user', 'greeting'));


    // $user = auth()->user();   
    // return view("dashboard", compact('user'));
}

        

