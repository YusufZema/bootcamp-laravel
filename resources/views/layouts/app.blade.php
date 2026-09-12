<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'لوحة التحكم' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body { font-family: Cairo, sans-serif; }</style>
    @stack('head')
</head>
<body class="min-h-screen bg-slate-100 text-slate-800">
    <aside class="fixed inset-y-0 right-0 z-40 hidden w-64 border-l border-slate-200 bg-white lg:block">
        <div class="flex h-full flex-col p-5">
            <a href="{{ route('dashboard') }}" class="mb-10 flex items-center gap-3 border-b border-slate-100 pb-5">
                <img src="{{ asset('logoH.jpg') }}" alt="شعار هرماس" class="h-12 w-12 rounded-full object-cover">
                <span class="text-xl font-extrabold text-indigo-600">هرماس</span>
            </a>
            <nav class="space-y-2 text-sm font-semibold">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 rounded-xl px-4 py-3 {{ request()->routeIs('dashboard') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-50' }}">لوحة التحكم</a>
                <a href="{{ route('tasks.index') }}" class="flex items-center gap-3 rounded-xl px-4 py-3 {{ request()->routeIs('tasks.*') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-50' }}">المهام</a>
                <a href="{{ route('profile.show') }}" class="flex items-center gap-3 rounded-xl px-4 py-3 {{ request()->routeIs('profile.*') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-50' }}">الملف الشخصي</a>
                <a href="{{ route('courses.index') }}" class="flex items-center gap-3 rounded-xl px-4 py-3 {{ request()->routeIs('courses.*') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-50' }}">الدورات</a>
                <a href="{{ route('plans.index') }}" class="flex items-center gap-3 rounded-xl px-4 py-3 {{ request()->routeIs('plans.*') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-50' }}">الخطط</a>
                <a href="{{ route('friends.index') }}" class="flex items-center gap-3 rounded-xl px-4 py-3 {{ request()->routeIs('friends.*') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-50' }}">الأصدقاء</a>
                <a href="{{ route('logout.view') }}" class="flex items-center gap-3 rounded-xl px-4 py-3 text-slate-600 hover:bg-slate-50">الإعدادات</a>
            </nav>
        </div>
    </aside>

    <header class="border-b border-slate-200 bg-white lg:mr-64">
        <div class="flex items-center justify-between px-5 py-4 sm:px-8">
            <h1 class="text-lg font-bold text-slate-800">{{ $title ?? 'لوحة التحكم' }}</h1>
            <span class="text-sm text-slate-500">{{ auth()->user()->name ?? '' }}</span>
        </div>
    </header>

    <main class="min-h-screen px-4 py-8 sm:px-8 lg:mr-64">
        @if(session('message') || session('success'))
            <div class="mx-auto mb-6 max-w-7xl rounded-xl bg-emerald-50 px-4 py-3 text-emerald-700">{{ session('message') ?? session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="mx-auto mb-6 max-w-7xl rounded-xl bg-red-50 px-4 py-3 text-red-700">
                <ul class="list-inside list-disc">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif
        @yield('content')
    </main>
    @stack('scripts')
</body>
</html>
