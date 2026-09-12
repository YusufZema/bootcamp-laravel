<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;


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
    $dateOfBirthMaximum = now()->subYears(16)->format('Y-m-d');

    return view('profile', compact('user', 'profile', 'dateOfBirthMaximum'));
}

    public function update(Request $request)
    {
        $sixteenYearsAgo = now()->subYears(16)->format('Y-m-d');

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'national_id' => [
                'required',
                'regex:/^[0-9]{10}$/',
                Rule::unique('users', 'national_id')->ignore($request->user()->id),
            ],
            'phone' => ['required', 'regex:/^[0-9]{10}$/', Rule::unique('users', 'phone')->ignore($request->user()->id)],
            'date_of_birth' => ['required', 'date', 'before_or_equal:' . $sixteenYearsAgo],
            'address' => ['required', 'string', 'max:255'],
            'bio' => ['required', 'string', 'min:20', 'max:300'],
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ], [
            'required' => 'حقل :attribute مطلوب.',
            'national_id.regex' => 'يجب أن يتكون رقم الهوية الوطنية من 10 أرقام فقط.',
            'national_id.unique' => 'رقم الهوية الوطنية مستخدم بالفعل.',
            'phone.regex' => 'يجب أن يتكون رقم الجوال من 10 أرقام فقط.',
            'phone.unique' => 'رقم الجوال مستخدم بالفعل.',
            'date_of_birth.before_or_equal' => 'يجب أن يكون عمر المستخدم 16 سنة على الأقل.',
            'date_of_birth.date' => 'يرجى إدخال تاريخ ميلاد صحيح.',
            'bio.min' => 'يجب أن تحتوي النبذة على 20 حرفاً على الأقل.',
            'bio.max' => 'يجب ألا تتجاوز النبذة 300 حرف.',
            'avatar.image' => 'يجب أن يكون الملف صورة صحيحة.',
            'avatar.mimes' => 'يُسمح بصور JPG أو JPEG أو PNG أو GIF فقط.',
            'avatar.max' => 'يجب ألا يتجاوز حجم الصورة 2 ميجابايت.',
        ], [
            'name' => 'الاسم',
            'national_id' => 'رقم الهوية الوطنية',
            'phone' => 'رقم الجوال',
            'date_of_birth' => 'تاريخ الميلاد',
            'address' => 'العنوان',
            'bio' => 'النبذة',
            'avatar' => 'الصورة الشخصية',
        ]);

        $user = $request->user();

        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user->update($data);

        return redirect()->route('profile.show')->with('message', 'تم تحديث الملف الشخصي بنجاح.');
    }


}
