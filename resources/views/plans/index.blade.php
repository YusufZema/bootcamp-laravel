@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-4xl text-center" dir="rtl">
    <p class="text-sm font-semibold tracking-wide text-indigo-600">الخطط</p>
    <h1 class="mt-2 text-4xl font-bold text-slate-900">اختر الخطة المناسبة لك</h1>
    <p class="mt-4 text-slate-500">خطط مرنة تناسب احتياجاتك التعليمية.</p>
    <div class="mt-10 grid gap-6 text-right md:grid-cols-3">
        @foreach([['مجاني', '0 ريال', 'ابدأ رحلة التعلم'], ['احترافي', '199 ريال', 'تعلّم بشكل أسرع'], ['مميز', '450 ريال', 'طوّر مهاراتك بالكامل']] as [$name, $price, $description])
            <article class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                <h2 class="text-xl font-bold text-slate-900">{{ $name }}</h2>
                <p class="mt-4 text-3xl font-extrabold text-indigo-600">{{ $price }}</p>
                <p class="mt-3 text-slate-500">{{ $description }}</p>
                <button class="mt-6 w-full rounded-xl bg-indigo-600 px-4 py-3 font-semibold text-white hover:bg-indigo-700">اشترك الآن</button>
            </article>
        @endforeach
    </div>
</section>
@endsection
