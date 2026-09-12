@extends('layouts.app')

@section('content')
<div class="mx-auto max-w-5xl" dir="rtl">
    <div class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
        <div>
            <p class="text-sm font-semibold text-indigo-600">حسابي</p>
            <h1 class="mt-2 text-3xl font-bold text-slate-900">الملف الشخصي</h1>
        </div>
        <button type="button" id="open-profile-modal" class="rounded-xl bg-indigo-600 px-5 py-3 font-semibold text-white shadow-sm hover:bg-indigo-700">تعديل الملف الشخصي</button>
    </div>

    <article class="grid overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 md:grid-cols-[260px_1fr]">
        <aside class="bg-indigo-600 p-8 text-center text-white">
            <img class="mx-auto h-32 w-32 rounded-full object-cover ring-4 ring-white/40" src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('imgs/avatar-placeholder-generator-500x500.avif') }}" alt="الصورة الشخصية">
            <h2 class="mt-5 text-xl font-bold">{{ $user->name }}</h2>
            <p class="mt-1 text-sm text-indigo-100">{{ $user->job ?? 'مستخدم' }}</p>
        </aside>

        <div class="p-6 sm:p-8">
            <section>
                <h2 class="text-lg font-bold text-slate-900">النبذة</h2>
                <p class="mt-3 leading-7 text-slate-600">{{ $user->bio ?? 'لا توجد معلومات بعد' }}</p>
            </section>
            <section class="mt-8">
                <h2 class="text-lg font-bold text-slate-900">المعلومات الشخصية</h2>
                <dl class="mt-4 grid gap-5 sm:grid-cols-2">
                    <div><dt class="text-sm text-slate-500">البريد الإلكتروني</dt><dd class="mt-1 font-semibold text-slate-800">{{ $user->email }}</dd></div>
                    <div><dt class="text-sm text-slate-500">رقم الهوية الوطنية</dt><dd class="mt-1 font-semibold text-slate-800">{{ $user->national_id ?? 'لا توجد معلومات بعد' }}</dd></div>
                    <div><dt class="text-sm text-slate-500">رقم الجوال</dt><dd class="mt-1 font-semibold text-slate-800">{{ $user->phone ?? 'لا توجد معلومات بعد' }}</dd></div>
                    <div><dt class="text-sm text-slate-500">تاريخ الميلاد</dt><dd class="mt-1 font-semibold text-slate-800">{{ $user->date_of_birth ?? 'لا توجد معلومات بعد' }}</dd></div>
                    <div><dt class="text-sm text-slate-500">العنوان</dt><dd class="mt-1 font-semibold text-slate-800">{{ $user->address ?? 'لا توجد معلومات بعد' }}</dd></div>
                    <div><dt class="text-sm text-slate-500">المهنة</dt><dd class="mt-1 font-semibold text-slate-800">{{ $user->job ?? 'لا توجد معلومات بعد' }}</dd></div>
                </dl>
            </section>
        </div>
    </article>
</div>

<div id="profile-modal" dir="rtl" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-950/60 px-4" role="dialog" aria-modal="true" aria-labelledby="profile-modal-title">
    <div class="w-full max-w-lg rounded-2xl bg-white p-6 shadow-2xl">
        <div class="flex items-center justify-between">
            <h2 id="profile-modal-title" class="text-xl font-bold text-slate-900">تعديل الملف الشخصي</h2>
            <button type="button" id="close-profile-modal" class="text-2xl text-slate-400 hover:text-slate-700" aria-label="إغلاق">&times;</button>
        </div>

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="mt-6 space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="mb-1 block text-sm font-semibold text-slate-700">الاسم الكامل</label>
                <input id="name" name="name" value="{{ old('name', $user->name) }}" required maxlength="255" class="w-full rounded-xl border border-slate-300 p-3 focus:border-indigo-500 focus:ring-indigo-500">
            </div>
            <div>
                <label for="national_id" class="mb-1 block text-sm font-semibold text-slate-700">رقم الهوية الوطنية</label>
                <input id="national_id" name="national_id" value="{{ old('national_id', $user->national_id) }}" required inputmode="numeric" pattern="[0-9]{10}" minlength="10" maxlength="10" autocomplete="off" class="numeric-ten-digits w-full rounded-xl border border-slate-300 p-3 focus:border-indigo-500 focus:ring-indigo-500">
                <p class="mt-1 text-xs text-slate-500">أدخل 10 أرقام فقط.</p>
            </div>
            <div>
                <label for="phone" class="mb-1 block text-sm font-semibold text-slate-700">رقم الجوال</label>
                <input id="phone" name="phone" value="{{ old('phone', $user->phone) }}" required inputmode="numeric" pattern="[0-9]{10}" minlength="10" maxlength="10" autocomplete="tel" class="numeric-ten-digits w-full rounded-xl border border-slate-300 p-3 focus:border-indigo-500 focus:ring-indigo-500">
                <p class="mt-1 text-xs text-slate-500">أدخل 10 أرقام فقط.</p>
            </div>
            <div>
                <label for="date_of_birth" class="mb-1 block text-sm font-semibold text-slate-700">تاريخ الميلاد</label>
                <input id="date_of_birth" name="date_of_birth" type="date" value="{{ old('date_of_birth', $user->date_of_birth) }}" max="{{ $dateOfBirthMaximum }}" required class="w-full rounded-xl border border-slate-300 p-3 focus:border-indigo-500 focus:ring-indigo-500">
                <p class="mt-1 text-xs text-slate-500">يجب أن يكون عمر المستخدم 16 سنة على الأقل.</p>
            </div>
            <div>
                <label for="bio" class="mb-1 block text-sm font-semibold text-slate-700">النبذة</label>
                <textarea id="bio" name="bio" rows="4" minlength="20" maxlength="300" required class="w-full rounded-xl border border-slate-300 p-3 focus:border-indigo-500 focus:ring-indigo-500">{{ old('bio', $user->bio) }}</textarea>
                <p class="mt-1 text-xs text-slate-500">يجب أن تكون النبذة بين 20 و300 حرف.</p>
            </div>
            <div>
                <label for="address" class="mb-1 block text-sm font-semibold text-slate-700">العنوان</label>
                <input id="address" name="address" value="{{ old('address', $user->address) }}" required maxlength="255" class="w-full rounded-xl border border-slate-300 p-3 focus:border-indigo-500 focus:ring-indigo-500">
            </div>
            <div>
                <label for="avatar" class="mb-1 block text-sm font-semibold text-slate-700">الصورة الشخصية</label>
                <input id="avatar" name="avatar" type="file" accept=".jpeg,.jpg,.png,.gif,image/jpeg,image/png,image/gif" class="block w-full cursor-pointer rounded-xl border border-slate-300 p-2 text-sm text-slate-600 file:ml-4 file:rounded-lg file:border-0 file:bg-indigo-50 file:px-4 file:py-2 file:font-semibold file:text-indigo-700 hover:file:bg-indigo-100">
                <p class="mt-1 text-xs text-slate-500">JPG أو PNG أو GIF، بحد أقصى 2MB.</p>
            </div>
            <div class="flex justify-start gap-3 pt-2">
                <button type="button" id="cancel-profile-modal" class="rounded-xl border border-slate-300 px-4 py-2 font-semibold text-slate-700">إلغاء</button>
                <button type="submit" class="rounded-xl bg-indigo-600 px-4 py-2 font-semibold text-white hover:bg-indigo-700">حفظ</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const profileModal = document.getElementById('profile-modal');
    const openProfileModal = () => { profileModal.classList.remove('hidden'); profileModal.classList.add('flex'); };
    const closeProfileModal = () => { profileModal.classList.add('hidden'); profileModal.classList.remove('flex'); };
    document.getElementById('open-profile-modal').addEventListener('click', openProfileModal);
    document.getElementById('close-profile-modal').addEventListener('click', closeProfileModal);
    document.getElementById('cancel-profile-modal').addEventListener('click', closeProfileModal);
    profileModal.addEventListener('click', (event) => { if (event.target === profileModal) closeProfileModal(); });
    document.querySelectorAll('.numeric-ten-digits').forEach((input) => {
        input.addEventListener('input', () => {
            input.value = input.value.replace(/[^0-9]/g, '').slice(0, 10);
        });
    });
    @if($errors->any())
        openProfileModal();
    @endif
</script>
@endpush
