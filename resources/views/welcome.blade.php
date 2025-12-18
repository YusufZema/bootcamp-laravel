<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hermas </title>
    <!-- fil css -->
    @vite([
        'resources/css/welcome.css',
        'resources/css/all.min.css',
        ])
    <!-- google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="container">
           <div class= "box_hedars ">
            <img class="hide-mobile w-100" src="logoH.jpg" alt="" />
            <h3 class="text text-c mt-0 p-relative">Hyrmas</h3>
          </div>
            <!-- <a href="#" class="logo"> Hermas Institute</a> -->
            <div class="grob">
                <a href="login" class="loginn"> login</a>
                <a href="regastr" class="loginn"> regastr</a>
            </div>
            <!-- <div class="links">
                <span class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div> -->
        </div>
    </div>
     <!-- Start Landing Section -->
     <div class="landing" style="background-image: url('logoH.jpg')">
        <div class="intro-text">
          <h1> مرحبا بكم </h1>
          <p>
             معهد هرماس هو مركز تدريبي يقدّم برامج تعليمية حديثة لتطوير المهارات التقنية واللغوية والمهنية، بإشراف مدربين متخصصين وبأساليب تدريب مبتكرة تلائم احتياجات سوق العمل.</p>
        </div>
      </div>
      <!-- End Landing Section -->
      <!-- Start Features -->
      <div class="features">
        <div class="container">
          <div class="feat">
            <i class="fas fa-magic fa-3x"></i>
            <h3>Tell Us Your Idea</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab</p>
          </div>
          <div class="feat">
            <i class="far fa-gem fa-3x"></i>
            <h3>We Will Do All The Work</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab</p>
          </div>
          <div class="feat">
            <i class="fas fa-globe-asia fa-3x"></i>
            <h3>Your Product is Worldwide</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab</p>
          </div>
        </div>
      </div>
      <!-- End Features -->
</body>
</html>