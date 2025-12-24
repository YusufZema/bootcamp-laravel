<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معهد هرماس - Hermas Institute</title>
    <!-- fil css -->
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <!-- Font Awesome - CDN for reliable server deployment -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&family=Cormorant+SC:wght@300;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="container">
           <div class="box_hedars">
            <img class="logo-img" src="{{ asset('logoH.jpg') }}" alt="شعار معهد هرماس" />
            <h3 class="logo-text">هرماس</h3>
          </div>
            <div class="grob">
                <a href="login" class="loginn"> تسجيل الدخول</a>
                <a href="regastr" class="loginn loginn-primary"> التسجيل</a>
            </div>
        </div>
    </div>
     <!-- Start Landing Section -->
     <div class="landing">
        <div class="landing-overlay"></div>
        <div class="intro-text">
          <h1 class="fade-in-up">مرحباً بكم</h1>
          <p class="fade-in-up-delay">
             معهد هرماس هو مركز تدريبي يقدّم برامج تعليمية حديثة لتطوير المهارات التقنية واللغوية والمهنية، بإشراف مدربين متخصصين وبأساليب تدريب مبتكرة تلائم احتياجات سوق العمل.
          </p>
          <div class="cta-buttons fade-in-up-delay-2">
            <a href="regastr" class="btn-primary">ابدأ رحلتك</a>
            <a href="#features" class="btn-secondary">اعرف المزيد</a>
          </div>
        </div>
        <div class="scroll-indicator">
          <div class="mouse">
            <div class="wheel"></div>
          </div>
        </div>
      </div>
      <!-- End Landing Section -->
      <!-- Start Features -->
      <div class="features" id="features">
        <div class="container">
          <div class="section-header">
            <h2 class="section-title">مميزاتنا</h2>
            <p class="section-subtitle">نقدم لكم أفضل الخدمات التعليمية والتدريبية</p>
          </div>
          <div class="features-grid">
            <div class="feat">
              <div class="feat-icon-wrapper">
                <i class="fas fa-graduation-cap" aria-hidden="true"></i>
              </div>
              <h3>برامج تعليمية متخصصة</h3>
              <p>نقدم برامج تدريبية شاملة تغطي جميع الجوانب التقنية واللغوية والمهنية لتطوير مهاراتك بشكل كامل</p>
            </div>
            <div class="feat">
              <div class="feat-icon-wrapper">
                <i class="fas fa-users" aria-hidden="true"></i>
              </div>
              <h3>مدربون محترفون</h3>
              <p>فريق من المدربين المتخصصين ذوي الخبرة الواسعة في مجالاتهم، جاهزون لمساعدتك في رحلتك التعليمية</p>
            </div>
            <div class="feat">
              <div class="feat-icon-wrapper">
                <i class="fas fa-briefcase" aria-hidden="true"></i>
              </div>
              <h3>مواكبة سوق العمل</h3>
              <p>برامجنا مصممة خصيصاً لتلائم احتياجات سوق العمل الحالية والمستقبلية، لضمان نجاحك المهني</p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Features -->
</body>
</html>