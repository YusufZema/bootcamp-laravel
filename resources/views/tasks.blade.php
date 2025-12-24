<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tasks</title>
        <link rel="stylesheet" href="{{ asset('css/freomwrok.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">    
        <link rel="stylesheet" href="{{ asset('css/tasks.css') }}">  
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
                    <span>Tasks</span>
                </a>
                </li>
                <li>
                <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="profile">
                    <i class="fa-regular fa-user fa-fw"></i>
                    <span>Profile</span>
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
                 <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="logout">
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
                    <input class="p-10" type="search" placeholder="Search courses" />
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
<!-- جدول التاسكات -->

<div class="table-wrapper">
    <a href="#">
        <h1>Tasks:</h1>
    </a>
    <table class="custom-table">

     <thead>
    <tr>
        <th>Status</th>
        <th>Task Title</th>
        <th>Description</th>
        <th style="text-align:center">Actions</th>
        <th style="text-align:center">Remove</th>
    </tr>
</thead>

<tbody>
@foreach($tasks as $task)
<tr>

    <!-- Status -->
    <td>
        @if($task->completed)
            <span class="status done">✔ Completed</span>
        @else
            <span class="status pending">❌ Pending</span>
        @endif
    </td>

    <!-- Title -->
    <td>{{ $task->title }}</td>

    <!-- Description -->
    <td class="text-truncate">{{ $task->description }}</td>

    <!-- Update -->
    <td style="text-align:center">
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PATCH')
            <button class="btn {{ $task->completed ? 'btn-warning' : 'btn-success' }}">
                {{ $task->completed ? 'Mark as Pending' : 'Mark as Completed' }}
            </button>
        </form>
    </td>

    <!-- Delete -->
    <td style="text-align:center">
        <form action="{{ route('tasks.destroy', $task) }}" method="POST"
              onsubmit="return confirm('Are you sure you want to delete this task?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
    </td>

</tr>
@endforeach
</tbody>


<!-- جدول التاسكات -->

        </div>
    </div>
    </div>
</body>
</html>