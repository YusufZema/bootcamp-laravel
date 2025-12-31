<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/freomwrok.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="page d-flex">
        <div class="sidebar p-relative p-20 bg-white">
            <div class="box_hedars">
                <img src="{{ asset('storage/' . $user->image) }}" width="150">
                <h3 class="text text-c mt-0 p-relative">هرماس</h3>
            </div>
            <ul>
                <li>
                    <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('dashboard') }}">
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
                    <input class="p-10" type="search" placeholder="ابحث عن الدورات..."/>
                </div>
                <div class="icons d-flex align-center">
                    <span class="notification p-relative">
                        <i class="fa-solid fa-bell"></i>
                    </span>
                    <img src="{{ asset('img/cat-family-job-board.svg') }}" alt="صورة المستخدم" />
                    <!-- <img class="hide-mobile" src="{{ asset('logoH.jpg') }}" alt="شعار" /> -->
                </div>
            </div>
            <!-- End Head -->

            <h1 class="p-relative">لوحة التحكم {{ $greeting }}</h1>
            
            <div class="wrapper d-grid gap-10">
                <!-- Welcome Card -->
                <div class="welcome bg-white rad-10 txt-c-mobile block-mobile">
                    <div class="intro p-20 d-flex space-between bg-eee">
                        <div>
                            <h2 class="m-0">مرحباً</h2>
                            <p class="c-grey mt-5">{{ $user->name }}</p>
                        </div>
                        <div class="intro-images">
                            <img class="hide-mobile" src="{{ asset('img/bg2-2.png') }}" alt="" />
                            <img class="hide-mobile" src="{{ asset('img/bg4-2.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
                        <div>
                            {{ $user->name }}
                            <span class="d-block c-grey fs-14 mt-10">مطور</span>
                        </div>
                        <div>
                            4
                            <span class="d-block c-grey fs-14 mt-10">مشاريع</span>
                        </div>
                        <div>
                            $8500
                            <span class="d-block c-grey fs-14 mt-10">مكسب</span>
                        </div>
                    </div>
                    <a href="{{ route('profile.show') }}" class="visit d-block fs-14 bg-blue c-white w-fit btn-shape">الملف الشخصي</a>
                </div>
                
                <!-- Create Task Card -->
                <div class="quick-draft p-20 bg-white rad-10">
                    @if(session('message'))
                        <div class="success-message">
                            {{ session('message') }}
                        </div>
                    @endif

                    <h2 class="mt-0 mb-10 txt-c">إنشاء مهمة جديدة</h2>
                    <p class="mt-0 mb-20 c-grey fs-15">ما هي المهمة التي تريد إضافتها اليوم؟</p>
                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        <input 
                            class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" 
                            type="text" 
                            name="title" 
                            placeholder="عنوان المهمة" 
                            required
                        />
                        <textarea 
                            class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" 
                            placeholder="وصف المهمة" 
                            name="description"
                            rows="4"
                            required
                        ></textarea>
                        <input 
                            class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" 
                            type="submit" 
                            value="حفظ" 
                        />
                    </form>
                    <img class="hide-mobile task-image" src="{{ asset('img/bg4-2.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let hour = new Date().getHours();

        fetch("{{ route('user.time') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            body: JSON.stringify({ hour: hour })
        }).then(() => {
            setTimeout(() => {
                location.reload();
            }, 3600000); // 3600000 = ساعة واحدة (60 دقيقة)
        });
    });
    </script>
</body>
</html>
