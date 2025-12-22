<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tasks</title>
    
          <link rel="stylesheet" href="{{ asset('css/freomwrok.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">    
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">  
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
                <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="dashboard">
                    <i class="fa-regular fa-chart-bar fa-fw"></i>
                    <span>Dashboard</span>
                </a>
                </li>
                <li>
                <a class="d-flex active align-center fs-14 c-black rad-6 p-10" href="tasks">
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
                <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="friends">
                    <i class="fa-regular fa-circle-user fa-fw"></i>
                    <span>Friends</span>
                </a>
                </li>
                <li>
                 <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="settings.html">
                    <i class="fa-solid fa-gear fa-fw"></i>
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

            <ul>
  <div class="overflow-x-auto mt-6">
    <table class="min-w-full bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm">
        <thead class="bg-gray-100 border-b">
            <tr>
                <th class="px-4 py-3 text-right font-semibold text-gray-700">الحالة</th>
                <th class="px-4 py-3 text-right font-semibold text-gray-700">العنوان</th>
                <th class="px-4 py-3 text-right font-semibold text-gray-700">الوصف</th>
                <th class="px-4 py-3 text-right font-semibold text-gray-700">تحديث</th>
                <th class="px-4 py-3  font-semibold text-gray-700">حذف</th>
            </tr>
        </thead>

        <tbody>
            @foreach($tasks as $task)
                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="px-4 py-3 text-right  text-lg">
                        {{ $task->completed ? '✔' : '❌' }}
                    </td>

                    <td class="px-4 py-3 text-right  text-gray-900 font-medium">{{ $task->title }}</td>

                    <td class="px-4 py-3 text-right  text-gray-600">{{ $task->description }}</td>

                    <td class="px-4 py-3">
                        <form action="{{ route('tasks.update', $task) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button
                                class="px-3 py-1 text-right  text-white 
                                       {{ $task->completed ? 'bg-green-500  hover:bg-yellow-600' :  'bg-red-600 hover:bg-green-700' }} transition">
                                {{ $task->completed ? 'إلغاء الإنجاز' : 'تم الإنجاز' }}
                            </button>
                        </form>
                    </td>

                    <td class="px-4 py-3">
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="px-3 text-right  py-1 rounded-lg bg-red-600 text-white hover:bg-red-700 transition">
                                حذف
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

            </ul>

        </div>
    </div>
    </div>
</body>

<h1>قائمة التاسكات</h1>

<!-- <form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <input type="text" name="title" placeholder="عنوان التاسك" required>

    <textarea name="description" placeholder="وصف التاسك (اختياري)"></textarea>

    <button type="submit">أضف</button>
</form> -->

<!-- <ul>
@foreach($tasks as $task)
    <li>
        <form action="{{ route('tasks.update', $task) }}" method="POST" style="display:inline;">
            @csrf
            @method('PATCH')
            <button type="submit">{{ $task->completed ? '✔' : '❌' }}</button>
        </form>

        {{ $task->title }}

        <form action="{{ route('tasks.destroy', $task) }}" method="POST" >
            @csrf
            @method('DELETE')
            <button type="submit">حذف</button>
        </form>
    </li>
@endforeach
</ul>

</body> -->
</html>