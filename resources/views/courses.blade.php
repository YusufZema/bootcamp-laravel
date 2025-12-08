<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="dashboard">
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
                <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="courses.html">
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
                </div>
            </div>
            <!-- End Head -->

            <section class="p-20">
                <h2 class="fs-25">الدورات التدريبية</h2>
                      
                <div class="d-grid gap-20 mt-15" style="grid-template-columns:repeat(auto-fit,minmax(240px,1fr));">
                    <article class="card p-15" data-price="0">
                        <img src="../img/example-5.svg" alt="دورة HTML و CSS"class="imgs" >
                        <h3 class="mt-10">مقدمة في HTML و CSS</h3>
                        <p class="fs-13 c-grey">دورة للمبتدئين لتعلم أساسيات بناء صفحات الويب.</p>
                        <div class="planss mt-10 d-flex space-between align-center">
                            <div class="fw-bold">مجانية</div>
                            <a href="plans.html">Plans</a> 
                        </div>
                    </article>

                    <article class="card p-15" data-price="199">
                        <img src="../img/example-21.svg" alt="دورة JavaScript" class="imgs">
                        <h3 class="mt-10">جافاسكربت للمبتدئين</h3>
                        <p class="fs-13 c-grey">تعلم كيفية برمجة التفاعل في صفحات الويب.</p>
                        <div class="planss mt-10 d-flex space-between align-center">
                            <div class="pres fw-bold">199 SAR</div>
                            <a href="plans.html" class="Plans">Plans</a> 
                        </div>
                    </article>
                    <article class="card p-15" data-price="199">
                        <img src="../img/example-21.svg" alt="دورة JavaScript" class="imgs">
                        <h3 class="mt-10">جافاسكربت للمبتدئين</h3>
                        <p class="fs-13 c-grey">تعلم كيفية برمجة التفاعل في صفحات الويب.</p>
                        <div class="planss mt-10 d-flex space-between align-center">
                            <div class="pres fw-bold">199 SAR</div>
                            <a href="plans.html">Plans</a> 
                        </div>
                    </article>
                    <article class="card p-15" data-price="199">
                        <img src="../img/example-21.svg" alt="دورة JavaScript" class="imgs">
                        <h3 class="mt-10">جافاسكربت للمبتدئين</h3>
                        <p class="fs-13 c-grey">تعلم كيفية برمجة التفاعل في صفحات الويب.</p>
                        <div class="planss mt-10 d-flex space-between align-center">
                            <div class="pres fw-bold">199 SAR</div>
                            <a href="plans.html">Plans</a> 
                        </div>
                    </article>
                    <article class="card p-15" data-price="199">
                        <img src="../img/example-21.svg" alt="دورة JavaScript" class="imgs">
                        <h3 class="mt-10">جافاسكربت للمبتدئين</h3>
                        <p class="fs-13 c-grey">تعلم كيفية برمجة التفاعل في صفحات الويب.</p>
                        <div class="planss mt-10 d-flex space-between align-center">
                            <div class="pres fw-bold">199 SAR</div>
                            <a href="plans.html">Plans</a> 
                        </div>
                    </article>

                    <article class="card p-15" data-price="450">
                        <img src="../img/example-21.svg" alt="دورة تصميم" class="imgs">
                        <h3 class="mt-10">تصميم واجهات المستخدم</h3>
                        <p class="fs-13 c-grey">أساسيات تصميم واجهات مستخدم جذابة وسهلة الاستخدام.</p>
                        <div class="planss mt-10 d-flex space-between align-center">
                            <div class="pres fw-bold">450 SAR</div>
                            <a href="plans.html">Plans</a>
                        </div>
                    </article>
                </div>
            </section>

        </div>
    </div>
    </div>
</body>
</html>