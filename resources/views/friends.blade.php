<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>friends</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!-- Google Fonts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/freomwrok.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">    
        <link rel="stylesheet" href="{{ asset('css/freinds.css') }}">    
</head>
<body>
    <div class="page  d-flex">
     <div class="sidebar p-relative p-20 bg-white">
            <div class="box_hedars">
                <img class="hide-mobile" src="{{ asset('logoH.jpg') }}" alt="شعار هرماس" />
                <h3 class="text text-c mt-0 p-relative">هرماس</h3>
            </div>
            <ul>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('dashboard') }}">
                        <i class="fa-regular fa-chart-bar fa-fw"></i>
                        <span>لوحة التحكم</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('tasks.index') }}">
                        <i class="fa-solid fa-list-check fa-fw"></i>
                        <span>المهام</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('profile.show') }}">
                        <i class="fa-regular fa-user fa-fw"></i>
                        <span>الملف الشخصي</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('courses.index') }}">
                        <i class="fa-solid fa-graduation-cap fa-fw"></i>
                        <span>الدورات</span>
                    </a>
                </li>
                <li>
                    <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('friends.index') }}">
                        <i class="fa-regular fa-circle-user fa-fw"></i>
                        <span>الأصدقاء</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('logout.view') }}">
                        <i class="fa-solid fa-gear fa-fw"></i>
                        <span>الإعدادات</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content w-full"> 
            <!-- Start Head -->
            <div class="head bg-white p-15 between-flex">
                <div class="search p-relative">
                    <input class="p-10" type="search" placeholder="Search courses" />
                </div>
                <div class="icons d-flex align-center">
                    <span class="notification p-relative">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </span>
                    <img src="../img/cat-family-job-board.svg" alt="" />
                    <!-- <img class="hide-mobile w-100" src="logoH.jpg" alt="" /> -->
                </div>
            </div>
            <!-- End Head -->

              <div class="bg-white py-10 ">
                <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
                  <!-- <div class="max-w-xl">
                    <h2 class="text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl">Meet our leadership</h2>
                    <p class="mt-6 text-lg/8 text-gray-600">We’re a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.</p>
                  </div> -->
        <div class="bg-gray-50 py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <!-- العنوان -->
        <h1 class="mb-10 text-center text-3xl font-bold text-gray-800">
            أصدقائي
        </h1>

        <!-- قائمة الأصدقاء -->
        @if($friends->count() > 0)
        <ul class="grid gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach($friends as $friend)
            <li class="rounded-2xl bg-white p-6 text-center shadow hover:shadow-lg transition">
                <img
                    src="{{ $friend->image ?? asset('imgs/default.png') }}"
                    class="mx-auto mb-4 h-24 w-24 rounded-full object-cover ring-2 ring-gray-200"
                    alt="صورة المستخدم">

                <h3 class="text-lg font-semibold text-gray-900">
                    {{ $friend->name }}
                </h3>

                <p class="text-sm text-gray-500">
                    {{ $friend->email }}
                </p>

                <span class="mt-3 inline-block rounded-full bg-green-100 px-4 py-1 text-sm font-medium text-green-600">
                    صديقك
                </span>
            </li>
            @endforeach
        </ul>
        @else
            <p class="text-center text-gray-500">
                ليس لديك أصدقاء بعد 😢
            </p>
        @endif

        <!-- فاصل -->
        <hr class="my-14">

        <!-- إضافة أصدقاء -->
        <h2 class="mb-10 text-center text-2xl font-bold text-gray-800">
            أضف أصدقاء جدد
        </h2>

        <ul class="grid gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach($otherUsers as $other)
            <li class="rounded-2xl bg-white p-6 text-center shadow hover:shadow-lg transition">
                <img
                    src="{{ $other->image ?? asset('imgs/default.png') }}"
                    class="mx-auto mb-4 h-24 w-24 rounded-full object-cover ring-2 ring-gray-200"
                    alt="صورة المستخدم">

                <h3 class="text-lg font-semibold text-gray-900">
                    {{ $other->name }}
                </h3>

                <p class="mb-4 text-sm text-gray-500">
                    {{ $other->email }}
                </p>

                @if(!$friends->contains($other->id))
                    <a href="{{ route('friends.add', $other->id) }}"
                       class="inline-block rounded-xl bg-indigo-600 px-5 py-2 text-sm font-semibold text-white hover:bg-indigo-700 transition">
                        ➕ إضافة صديق
                    </a>
                @else
                    <span class="inline-block rounded-xl bg-green-100 px-5 py-2 text-sm font-semibold text-green-600">
                        ✔ مضاف بالفعل
                    </span>
                @endif
            </li>
            @endforeach
        </ul>

    </div>
</div>



        </div>
    </div>
    </div>
</body>
<!-- <body>
    <div class="bg-white py-24 sm:py-32">
  <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
    <div class="max-w-xl">
      <h2 class="text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl">Meet our leadership</h2>
      <p class="mt-6 text-lg/8 text-gray-600">We’re a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.</p>
    </div>
    <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
      <li>
        <div class="flex items-center gap-x-6">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Leslie Alexander</h3>
            <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CEO</p>
          </div>
        </div>
      </li>
      <li>
        <div class="flex items-center gap-x-6">
          <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Michael Foster</h3>
            <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CTO</p>
          </div>
        </div>
      </li>
      <li>
        <div class="flex items-center gap-x-6">
          <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Dries Vincent</h3>
            <p class="text-sm/6 font-semibold text-indigo-600">Business Relations</p>
          </div>
        </div>
      </li>
      <li>
        <div class="flex items-center gap-x-6">
          <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Lindsay Walton</h3>
            <p class="text-sm/6 font-semibold text-indigo-600">Front-end Developer</p>
          </div>
        </div>
      </li>
      <li>
        <div class="flex items-center gap-x-6">
          <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Courtney Henry</h3>
            <p class="text-sm/6 font-semibold text-indigo-600">Designer</p>
          </div>
        </div>
      </li>
      <li>
        <div class="flex items-center gap-x-6">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Tom Cook</h3>
            <p class="text-sm/6 font-semibold text-indigo-600">Director of Product</p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>

</body> -->
</html>