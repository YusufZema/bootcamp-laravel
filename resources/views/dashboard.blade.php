<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
        @vite([
        'resources/css/freomwrok.css',
        'resources/css/dashboard.css',
        'resources/css/main_dashboard.css'
        ])
</head>
<body>
    <div class="page  d-flex">
    <div class="sidebar p-relative p-20 bg-white">
        <h3 class="text text-c mt-0 p-relative">Hyrmas</h3>
            <ul>
                <li>
                <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="dashboard">
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
                <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="friends">
                    <i class="fa-regular fa-circle-user fa-fw"></i>
                    <span>Friends</span>
                </a>
                </li>
                <li>
                <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="Settings">
                    <i class="fa-regular fa-circle-user fa-fw"></i>
                    <span>Settings</span>
                </a>
                <!-- </li>
                 <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="settings.html">
                    <i class="fa-solid fa-gear fa-fw"></i>
                    <span>Settings</span>
                </a>
                </li> -->
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
                    <img src="{{ asset('img/cat-family-job-board.svg') }}" alt="" />
                </div>
            </div>
            <!-- End Head -->

               <h1 class="p-relative">Dashboard   {{ $greeting }}</h1>
        <div class="wrapper d-grid gap-20">
            <div class="welcome bg-white rad-10 txt-c-mobile block-mobile">
                              <div class="intro p-20 d-flex space-between bg-eee">
                                <div>
                                    <h2 class="m-0">Welcome</h2>
                                    <p class="c-grey mt-5"> {{ $user->name }}</p>
                                </div>

                                <img class="hide-mobile w-100" src="../img/bg2-2.png" alt="" />

                              </div>
                              <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
                                <div>{{ $user->name }}  <span class="d-block c-grey fs-14 mt-10">Developer</span></div>
                                <div>4 <span class="d-block c-grey fs-14 mt-10">Projects</span></div>
                                <div>$8500 <span class="d-block c-grey fs-14 mt-10">Earned</span></div>
                                </div>
                                <a href="profile" class="visit d-block fs-14 bg-blue c-white w-fit btn-shape">Profile</a>
                                </div>
                                 <div class="quick-draft p-20 bg-white rad-10">
                                    @if(session('message'))
                                        <div 
                                            style="background: #d4edda; color: #155724; padding: 12px 20px; 
                                                border-radius: 6px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
                                            {{ session('message') }}
                                        </div>
                                    @endif

                                    <h2 class="mt-0 mb-10 twxt-Center">انساء تاسك </h2>
                                    <p class="mt-0 mb-20 c-grey fs-15"> اكتب تاسك اليوام </p>
                                    <form action="{{ route('tasks.store') }}"method="POST"> 
                                        @csrf    
                                     <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="text"  name="title" placeholder="Title" />
                                    <textarea class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" placeholder="desk" name="description"></textarea>
                                    <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" type="submit" value="Save" />
                                    </form>
                                     <img class="hide-mobile w-100" src="../img/bg4-2.png" alt="" />
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</body>






















            <!-- <h1 class="p-relative">Dashboard   {{ $greeting }}</h1>
        <div class="wrapper d-grid gap-20">
            <div class="welcome bg-white rad-10 txt-c-mobile block-mobile">
                              <div class="intro p-20 d-flex space-between bg-eee">
                                <div>
                                    <h2 class="m-0">Welcome</h2>
                                    <p class="c-grey mt-5"> {{ $user->name }}</p>
                                </div>

                                <img class="hide-mobile w-100" src="../img/bg2-2.png" alt="" />

                              </div>
                              <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
                                <div>{{ $user->name }}  <span class="d-block c-grey fs-14 mt-10">Developer</span></div>
                                <div>4 <span class="d-block c-grey fs-14 mt-10">Projects</span></div>
                                <div>$8500 <span class="d-block c-grey fs-14 mt-10">Earned</span></div>
                                </div>
                                <a href="profile" class="visit d-block fs-14 bg-blue c-white w-fit btn-shape">Profile</a>
                                </div>
                                 <div class="quick-draft p-20 bg-white rad-10">
                                    @if(session('message'))
                                        <div 
                                            style="background: #d4edda; color: #155724; padding: 12px 20px; 
                                                border-radius: 6px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
                                            {{ session('message') }}
                                        </div>
                                    @endif

                                    <h2 class="mt-0 mb-10">انساء تاسك </h2>
                                    <p class="mt-0 mb-20 c-grey fs-15"> اكتب تاسك اليوام </p>
                                    <form action="{{ route('tasks.store') }}"method="POST"> 
                                        @csrf    
                                     <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="text"  name="title" placeholder="Title" />
                                    <textarea class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" placeholder="Your Thought" name="description"></textarea>
                                    <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" type="submit" value="Save" />
                                    </form>
                                </div>
                                
                                
                                
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


















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