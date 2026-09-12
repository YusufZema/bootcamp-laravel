@extends('layouts.app')

@section('content')
<div class="mx-auto max-w-2xl" dir="rtl">
    <div class="mb-8">
        <p class="text-sm font-semibold tracking-wide text-indigo-600">المهام</p>
        <h1 class="mt-2 text-3xl font-bold text-slate-900">تعديل المهمة</h1>
        <p class="mt-2 text-slate-500">حدّث بيانات المهمة ثم احفظ التعديلات.</p>
    </div>
    <form action="{{ route('tasks.update', $task) }}" method="POST" class="space-y-6 rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 sm:p-8">
        @csrf
        @method('PATCH')
        <div>
            <label for="title" class="mb-2 block text-sm font-semibold text-slate-700">العنوان</label>
            <input id="title" name="title" type="text" value="{{ old('title', $task->title) }}" required class="w-full rounded-xl border-slate-300 px-4 py-3 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
        </div>
        <div>
            <label for="description" class="mb-2 block text-sm font-semibold text-slate-700">الوصف</label>
            <textarea id="description" name="description" rows="6" class="w-full rounded-xl border-slate-300 px-4 py-3 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">{{ old('description', $task->description) }}</textarea>
        </div>
        <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
            <a href="{{ route('tasks.index') }}" class="rounded-xl border border-slate-300 px-5 py-3 text-center font-semibold text-slate-700 hover:bg-slate-50">إلغاء</a>
            <button type="submit" class="rounded-xl bg-indigo-600 px-5 py-3 font-semibold text-white shadow-sm hover:bg-indigo-700">حفظ التعديلات</button>
        </div>
    </form>
</div>
@endsection
