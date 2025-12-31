<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tasks</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!-- Google Fonts -->
    <link rel="stylesheet" href="{{ asset('css/freomwrok.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/tasks.css') }}">  
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
                    <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('tasks.index') }}">
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
                    <input class="p-10" type="search" placeholder="Search courses" />
                </div>
                <!-- <div class="icons d-flex align-center">
                    <span class="notification p-relative">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </span>
                    <img src="../img/cat-family-job-board.svg" alt="" />
                    <img class="hide-mobile w-100" src="logoH.jpg" alt="" />

                </div> -->
            </div>
            <!-- End Head -->
<!-- جدول التاسكات -->
<div class="table-wrapper">
    <h1>المهام:</h1>

    <table class="custom-table">
        <thead>
            <tr>
                <th>الحالة</th>
                <th>عنوان المهمة</th>
                <th>الوصف</th>
                <th style="text-align:center">تحديث الحالة</th>
                <th style="text-align:center">تعديل</th>
                <th style="text-align:center">حذف</th>
            </tr>
        </thead>

        <tbody>
        @foreach($tasks as $task)
            <tr>
                <!-- الحالة -->
                <td>
                    @if($task->completed)
                        <span class="status done">✔ مكتمل</span>
                    @else
                        <span class="status pending">❌ لم يكتمل</span>
                    @endif
                </td>

                <!-- العنوان -->
                <td>{{ $task->title }}</td>

                <!-- الوصف -->
                <td class="text-truncate">{{ $task->description }}</td>

                <!-- تحديث الحالة -->
                <td style="text-align:center">
                    <form action="{{ route('tasks.update', $task) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn {{ $task->completed ? 'btn-success' : '' }}">
                            {{ $task->completed ? 'المهمة مكتملة' : 'المهمة لم تكتمل' }}
                        </button>
                    </form>
                </td>

                <!-- تعديل -->
                <td style="text-align:center">
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">
                        تعديل
                    </a>
                </td>

                <!-- حذف -->
                <td style="text-align:center">
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                          onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


<!-- جدول التاسكات -->

        </div>
    </div>
    </div>
</body>
</html>