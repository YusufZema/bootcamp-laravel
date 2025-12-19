<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>friends</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/freomwrok.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">    
</head>
<body>
    <div class="page  d-flex">
    <div class="sidebar p-relative p-20 bg-white">
         <div class= "box_hedars ">
            <img class="hide-mobile w-100" src="logoH.jpg" alt="" />
            <h3 class="text text-c mt-0 p-relative">Hyrmas</h3>
        </div>
      <ul>
                <li>
                <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="dashboard">
                    <i class="fa-regular fa-chart-bar fa-fw"></i>
                    <span>Dashboard</span>
                </a>
                </li>
                <li>
                <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="tasks">
                    <i class="fa-solid fa-gear fa-fw"></i>
                    <span>tasks</span>
                </a>
                </li>
                <li>
                <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="profile">
                    <i class="fa-regular fa-user fa-fw"></i>
                    <span>Profile</span>
                </a>
                </li>
                <li>
                <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="projects.html">
                    <i class="fa-solid fa-diagram-project fa-fw"></i>
                    <span>Projects</span>
                </a>
                </li>
                <li>
                <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="courses">
                    <i class="fa-solid fa-graduation-cap fa-fw"></i>
                    <span>Courses</span>
                </a>
                </li>
                <li>
                <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="friends">
                    <i class="fa-regular fa-circle-user fa-fw"></i>
                    <span>Friends</span>
                </a>
                </li>
                <li>
                <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="Settings">
                    <i class="fa-regular fa-circle-user fa-fw"></i>
                    <span>Settings</span>
                </a>
                </li>
            </ul>
    </div>
        <div class="content w-full"> 
            <!-- Start Head -->
            <div class="head bg-white p-15 between-flex">
                <div class="search p-relative">
                    <input class="p-10" type="search" placeholder="بحث عن دورة" />
                </div>
                <div class="icons d-flex align-center">
                    <span class="notification p-relative">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </span>
                    <img src="../img/cat-family-job-board.svg" alt="" />
                    <img class="hide-mobile w-100" src="logoH.jpg" alt="" />
                </div>
            </div>
            <!-- End Head -->

              <div class="bg-white py-10 ">
                <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
                  <!-- <div class="max-w-xl">
                    <h2 class="text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl">Meet our leadership</h2>
                    <p class="mt-6 text-lg/8 text-gray-600">We’re a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.</p>
                  </div> -->
                  <ul role="list" class="grid gap-x-10 gap-y-12 sm:grid-cols-3 sm:gap-y-16 xl:col-span-4">
                    <li>
                      <div class="items-center twxt-Center gap-x-6">
                        <img class=" rounded-full outline-1 -outline-offset-1 outline-black/5"  src="{{ asset('imgs/photo_2025-12-08_20-50-45.jpg') }}" alt="logo">
                        <div>
                          <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Leslie Alexander</h3>
                          <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CEO</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="items-center twxt-Center gap-x-6">
                        <img class=" rounded-full outline-1 -outline-offset-1 outline-black/5"  src="{{ asset('imgs/photo_2025-12-08_20-51-28.jpg') }}" alt="logo">
                        <div class="">
                          
                          <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Michael Foster</h3>
                          <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CTO</p>
                        </div>
                      </div>
                    </li>
                   <li>
                      <div class="items-center twxt-Center gap-x-6">
                        <img class=" rounded-full outline-1 -outline-offset-1 outline-black/5"  src="{{ asset('imgs/photo_2025-12-08_20-52-06.jpg') }}" alt="logo">
                        <div class="">
                          <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Michael Foster</h3>
                          <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CTO</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="items-center twxt-Center gap-x-6">
                        <img class=" rounded-full outline-1 -outline-offset-1 outline-black/5"  src="{{ asset('imgs/photo_2025-12-08_20-52-36.jpg') }}" alt="logo">
                        <div class="">
                          <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Michael Foster</h3>
                          <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CTO</p>
                        </div>
                      </div>
                    </li>
                  <li>
                      <div class="items-center twxt-Center gap-x-6">
                        <img class=" rounded-full outline-1 -outline-offset-1 outline-black/5"  src="{{ asset('imgs/photo_2025-12-08_20-53-10.jpg') }}" alt="logo">
                        <div class="">
                          <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Michael Foster</h3>
                          <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CTO</p>
                        </div>
                      </div>
                    </li>
                   <li>
                      <div class="items-center twxt-Center gap-x-6">
                        <img class=" rounded-full outline-1 -outline-offset-1 outline-black/5"  src="{{ asset('imgs/photo_2025-12-08_21-59-28.jpg') }}" alt="logo">
                        <div class="">
                          <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Michael Foster</h3>
                          <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CTO</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

            <h1>أصدقائي</h1>

@if($friends->count() > 0)
    <ul>
    @foreach($friends as $friend)
        <li>{{ $friend->name }} - {{ $friend->email }}</li>
    @endforeach
    </ul>
@else
    <p>ليس لديك أصدقاء بعد.</p>
@endif

<hr>

<h2>أضف أصدقاء جدد</h2>

<ul>
@foreach($otherUsers as $other)
    <li>
        {{ $other->name }} - {{ $other->email }}
        @if(!$friends->contains($other->id))
            <a href="{{ route('friends.add', $other->id) }}" style="color:blue;">إضافة صديق</a>
        @else
            <span style="color:green;">مضاف بالفعل</span>
        @endif
    </li>
@endforeach
</ul>


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