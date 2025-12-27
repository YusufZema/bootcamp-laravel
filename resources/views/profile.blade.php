<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!-- Google Fonts -->
    <link rel="stylesheet" href="{{ asset('css/freomwrok.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/Profile.css') }}">  
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
                    <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('dashboard') }}">
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
                    <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('profile.show') }}">
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
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('friends.index') }}">
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
            <input  class="p-10" type="search" placeholder="Search courses" />
            
        </div>
        <div class="icons d-flex align-center">
            <span class="notification p-relative">
                <i class="fa-solid fa-pencil"></i>
            </span>
            <img src="../img/cat-family-job-board.svg" alt="" />
             <!-- <img class="hide-mobile w-100" src="logoH.jpg" alt="" /> -->

        </div>
        </div>
        <!-- End Head -->
          <div class="content_pro w-full">

                <article class="card" role="region" aria-labelledby="profileTitle">
                    <aside class="side txt-c p-20">
                        <img class="avatar rad-half" src="../imgs/avatar-placeholder-generator-500x500.avif" alt="الصورة الشخصية" loading="lazy" width="256" height="256" />
                        <h1 id="profileTitle" class="mt-15"> {{ $user->name }}</h1>
                        <div class="actions mt-15">
                            <div class="center-flex">
                               <button type="button" class="button1">تعديل </button>
                            </div>
                        </div>

                        <footer>
                            <time datetime="2027-7-13">آخر تحديث:2027-7-13</time>
                        </footer>
                    </aside>

                    <main class="main">
                        <section class="about">
                            <h2>نبذة</h2>
                            <p class="bio">{{ $profile->about ?? 'No information yet' }}</p>
                        </section>

                        <section class="contact mt-18">
                            <h2>معلومات</h2>
                            <div class="info">
                                <div class="field">
                                    <label>البريد الإلكتروني</label>
                                    <div>{{ $user->email }} </div>
                                </div>
                                <div class="field">
                                    <label>الهاتف</label>
                                   <div>{{ $user->phone }} </div>
                                </div>

                                <div class="field">
                                    <label>الموقع</label>
                                     <div>{{ $user->address }} </div>
                                </div>
                                <div class="field">
                                    <label>المهنة</label>
                                    <div>{{ $user->job }} </div>
                                </div>
                            </div>
                        </section>
                    </main>
                </article>
            </div>
        </div>      
    </div>
    </div>
</body>
</html>
<!-- <h1>Profile Page</h1>

<p><strong>Full Name:</strong> {{ $profile->full_name ?? 'Not set' }}</p>
<p><strong>About:</strong> {{ $profile->about ?? 'No information yet' }}</p> -->
