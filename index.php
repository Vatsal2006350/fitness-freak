<?php  session_start();?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fitness Freak | Eat to live not live to eat </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="logo.jpg">
    
   <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Roboto+Condensed:ital,wght@0,300;0,400;1,300;1,400&display=swap");
        body {
        font-family: "Roboto Condensed", sans-serif;
        font-weight: normal;
        font-style: normal;
        }

/* line 9, C:/Users/HP/Desktop/July-HTML/292 Health coach/assets/scss/_common.scss */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
        font-family: "Oswald", sans-serif;
        color: #2c234d;
        margin-top: 0px;
        font-style: normal;
        font-weight: 500;
        text-transform: normal;
        }

/* line 23, C:/Users/HP/Desktop/July-HTML/292 Health coach/assets/scss/_common.scss */
        p {
        font-family: "Roboto Condensed", sans-serif;
        color: #10285d;
        font-size: 16px;
        line-height: 30px;
        margin-bottom: 15px;
        font-weight: normal;
        }
        
        .donate {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
}

input {
    padding: 10px;
    margin-bottom: 15px;
}

input[type="submit"] {
    background-color: #8B0000;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #FF0000;
}

        
        
        

    </style>
    
    <script type="text/javascript">
        function myfun(){
            alert("Thank you for your interest in donating to our program. We will revert back to you shortly.")
        }
    </script>

</head>
<body class="black-bg">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="logo.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="logo.jpg" alt="" style="height: 60px;width: 70px;"></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="courses.php">Expert Insights</a></li>
                                    <li><a href="pricing.php">Diet Planner</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="blog.php">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="blog_details.php">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn -->
                        <?php 
                                if(isset($_SESSION['USER']))
                                {
                                    ?>
                                    
                                    <div style="float:right;">
                                            <h3 style="color:white;float:right;margin-right:1px; text-aligh:right;">Welcome <?php echo $_SESSION['USER'];?></h3>
                                    </div>
                                    <?php
                                }
                        ?>
                        <?php if(isset($_SESSION['USER']) && !empty($_SESSION['USER'])){ ?>
                            <a href="logout.php" class="btn btn-danger1" style="float:right;margin:15px; padding:22px; margin-top:-2px;">Logout</a>
                        <?php } else {?>
                        <div class="header-btns d-none d-lg-block f-right">
                           <a href="login.php" class="btn">Login / Sign Up</a>
                       </div>
                       <?php }?>
                       <!-- Mobile Menu -->
                       <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative backimg">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay="0.1s" >Welcome to</span>
                                <h1 data-animation="fadeInLeft" data-delay="0.4s">Fitness Freak</h1>
                                <a href="courses.php" class="border-btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">My Courses</a>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <!-- slider Area End-->
     <!--? About Area-2 Start -->
    <section class="about-area2 fix pb-padding pt-50 pb-80">
        <div class="support-wrapper align-items-center">
            <div class="right-content2">
                <!-- img -->
                <div class="right-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <img src="transform.png" alt="">
                </div>
            </div>
            <div class="left-content2">
                <!-- section tittle -->
                <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="front-text">
                        <h2 class="">The Mission of this non-profit</h2>
                        <p>Fitness Freak is a student-led nonprofit dedicated to democratizing access to healthcare information and fostering inclusivity. Our platform offers a range of resources, including home workout videos, interviews with respected doctors in Dubai, and personalized weight loss plans, all available free of charge. We firmly believe that everyone should have the opportunity to prioritize their health, regardless of financial constraints. Our mission is to make a positive impact on people's lives worldwide, recognizing that health and wellness are universal concerns. Additionally, we strive to support underprivileged communities and individuals facing health challenges, fostering connections and empowerment.Our founder's personal triumph over obesity – losing 65kg – and overcoming societal stigma drives our commitment to inspire others. We believe everyone can reclaim their health and create a more fulfilling life, regardless of the obstacles they face.</p>
                        <a href="https://www.linkedin.com/in/vatsal-shah-a7a0b1255/" class="border-btn">LinkedIn</a>
                        <a href="https://www.instagram.com/fitness_freak_/" class="border-btn">Instagram</a>
                        <a href="https://www.youtube.com/channel/UCj1MmmYmX7AHpZye7481Z-A" class="border-btn">YouTube</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
    <!-- Traning categories Start -->
    <section class="traning-categories ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="Band_Curls.webp" style="height:650px;width:700px;"  alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>Exercising</h3>
                                    <p>This is a popular trend in the fitness world today. My program will improve your health and have you feeling great. You’ll see an improvement in your performance and flexibility in no time. <br>.</p>
                                    <a href="courses.php" class="border-btn">View Videos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="Healthy_eating.webp"style="height:650px;width:700px;" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>Healthy Eating</h3>
                                    <p>The unique program I’ve developed will help burn calories, boost metabolism and improve your overall health. A combination of strategic exercises using strength bands and a healthy diet will help you optimize your weight loss.<br></p>
                                    <a href="pricing.php" class="btn">View Diet Planner</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Traning categories End-->
    <!--? Team -->
    <section class="team-area fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <h2 >Exercising Components</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                        <div class="cat-icon">
                            <img src="flicks.webp" style="height:350px; width:250px" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="">Cardio Fitness</a></h5>
                            <p>The unique program I’ve developed will help burn calories, boost metabolism and improve your overall health. A combination of strategic exercises using strength bands and a healthy diet will help you optimize your weight loss </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="Knee_Lunges.webp" style="height:350px; width:250px"alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="">Dynamic Stretching</a></h5>
                            <p>This is a popular trend in the fitness world today. My program will improve your health and have you feeling great. You’ll see an improvement in your performance and flexibility in no time.  </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="cat-icon">
                            <img src="Weight-1.webp"  style="height:350px; width:250px"alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="">Weight Training</a></h5>
                            <p>Health and Fitness is not only about what your body looks like on the outside, but also on the inside! I have exercises which do not require gym equipment, and are possible with supplements that perform a similar task in helping you to gain muscle.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area section-padding30 ">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(reverse_lunges.webp);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Dynamic Stretching </h3>
                                <a href="gallery.php"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(Weight.webp);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Weight Training </h3>
                                <a href="gallery.php"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(Stool.webp);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Dynamic Stretching</h3>
                                <a href="gallery.php"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(Stretching.webp);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Dynamic Stretching </h3>
                                <a href="gallery.php"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(Cardio_1.webp);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Cardio Fitness </h3>
                                <a href="gallery.php"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(Stretch.webp);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Dynamic Stretching </h3>
                                <a href="gallery.php"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <!-- Courses area start -->
    <section class="pricing-area section-padding40 fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                        <h2>Diet Planner</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="assets/img/icon/price.svg" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">Beginner</span>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Breakfast: Overnight oats made with almond milk, a handful of berries, and a sprinkle of nuts or seeds.</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Snack: An orange and a small handful of nuts.</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Lunch: A big salad (include a variety of vegetables), with grilled chicken. Veg Alternative: Swap chicken for chickpeas or tofu.</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Snack: Greek yogurt with a spoonful of honey. Veg Alternative: A banana and a spoonful of peanut butter.</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Dinner: Grilled fish, a serving of brown rice, and steamed vegetables. Veg Alternative: Swap fish for tempeh or a veggie burger.</p>
                                        <br><br><br><br><br><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="assets/img/icon/price.svg" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">Intermediate</span>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Breakfast: Scrambled eggs with a side of avocado and whole grain toast. Veg Alternative: Tofu scramble with vegetables and a side of whole grain toast. </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Snack: Cottage cheese with a handful of berries. Veg Alternative: Hummus with vegetable sticks.</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Lunch: Quinoa salad with a variety of vegetables and a portion of grilled chicken. Veg Alternative: Quinoa salad with a variety of vegetables and a portion of black beans.</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Snack: A small bowl of Greek yogurt with mixed berries. Veg Alternative: A small bowl of mixed nuts and seeds.</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Dinner: Grilled turkey breast with sweet potato and steamed green beans. Veg Alternative: Grilled portobello mushroom cap, sweet potato and steamed green beans.</p>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="assets/img/icon/price.svg" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">Advanced</span>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Breakfast: Spinach and feta cheese omelette with a slice of whole grain bread. Veg Alternative: Spinach and tofu scramble with a slice of whole grain bread. </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Snack: A small bowl of cottage cheese with a sprinkle of chia seeds. Veg Alternative: A green smoothie made with spinach, a small banana, a tablespoon of chia seeds, and almond milk.</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Lunch: Grilled salmon, quinoa, and a serving of steamed asparagus. Veg Alternative: Grilled tempeh, quinoa, and a serving of steamed asparagus.</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Snack: A small bowl of Greek yogurt with a handful of almonds. Veg Alternative: A small bowl of mixed fruits with a handful of almonds.</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Dinner: Grilled chicken breast, wild rice, and a side of roasted brussels sprouts. Veg Alternative: Grilled tofu, wild rice, and a side of roasted Brussels sprouts.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses area End -->
    
    <!-- About Area End -->
    <!--? Blog Area Start -->
    <section class="home-blog-area pt-10 pb-50">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-100 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2>From Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="blog 1.jpeg" style="height: 500px; width:600px"alt="">
                            </div>
                            <div class="blog-cap">
                                <span>Health & Wellness</span>
                                <h3><a href="blog_details.php">The Beginning: Tipping the Scale at 140kg</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="Kneel_Downs.webp" style="height: 500px; width:600px" alt="">
                            </div>
                            <div class="blog-cap">
                                <span>Exercising & Health</span>
                                <h3><a href="blog_details_2.php">The Unsung Hero of My Journey</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
    <div>
        
        <section class="home-blog-area pt-10 pb-50">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-100 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2>Our Donation Drive</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="IMG-8160.jpg" style="height: 500px; width:500px"alt="">
                            </div>
                            <div class="blog-cap">
                                <h3><a>Helping communities in Kenya</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="IMG-20231224-WA0017.jpg" style="height: 500px; width:600px" alt="">
                            </div>
                            <div class="blog-cap">
                                <h3><a>Work with Access Life Foundation in India</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <div class="donate">
        <section id="program-info">
            <h2>About Our Donation Program</h2>
            <p>At Fitness Freak, we are dedicated to extending healthcare resources to economically disadvantaged and marginalized communities in India, Kenya, and beyond. Your donations are vital to our mission of spreading healthcare knowledge worldwide. The proceeds from my health book, "Rebirth of Strength," have already generated $15,000, and we aim to expand further with your ongoing support. Our efforts have reached over 2,000 underprivileged children in India and Kenya, and we are grateful for your contribution to this cause.</p>
        </section>

        <section id="donation-form">
            <h2>Make a Donation</h2>
            <form action="" method="post" onsubmit="myfun()">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="amount">Amount of Donation you plan to make: ($):</label>
                <input type="number" id="amount" name="amount" min="1" required>

                <input type="submit" value="Donate">
            </form>
        </section>
    </div> 
        
        
    </div>

    <!--? video_start -->
    <h1 style="text-align:center;font-size:60px;color:white">MY JOURNEY</h1>

    <centre>
    <iframe width="100%" height="1000px" src="https://www.youtube.com/embed/ETjKO_2AKrw?si=DLg4OUUC_sD9A8wV" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
    </iframe>
<centre/>
    <!-- video_end -->
    <!-- Counter -->
<div style="background-color:black;text-align:center" >
    <p>
      <div class="d-flex justify-content-center fw-bold "style="color: #EB0028;font-size:60px">Our Satistics</div>
    </p>
    <p style="text-align:center">
      <div class="container">
         <div class="row">
            <div class="col-sm">
               <b><p id='0101' class="fs-1 text-light">15000+</p></b>
               <p class="text-light">Users</p>
            </div>
            <div class="col-sm">
               <b><p id='0102' class="fs-1 text-light">50+</p></b>
               <p class="text-light">Workout Videos</p>
            </div>
         <div class="col-sm">
            <p class="fs-1 text-light"><span id='0103'>98</span>%</p>
            <p class="text-light align-content-center">User Satisfaction</p>
         </div>
      </div>
    </div>
    </p>
</div>
    
    <!-- Counter end -->
    <!-- ? services-area -->
    <section class="services-area" style="background-color: black;">>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="features-icon" >
                        <i class="fa-regular fa-compass fa-4x" style="color:white;height: 50px;width:50px;padding:7px;"></i>
                        </div>
                        <div class="features-caption">
                            <h3>Location</h3>
                            <p>Dubai, Al Hamriyah 16th street, United Arab Emirates </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="features-icon">
                        <i class="fa-solid fa-phone fa-4x" style="color:white;height: 50px;width:50px;padding:7px;"></i>
                        </div>
                        <div class="features-caption">
                            <h3>Phone</h3>
                            <p>+971 50 806 2831</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="features-icon">
                        <i class="fa-solid fa-envelope fa-4x" style="color:white;height: 50px;width:50px;padding:7px; margin-top: -8px;"></i>
                        </div>
                        <div class="features-caption">
                            <h3>Email</h3>
                            <p>svatsal64@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <!--? Footer Start-->
    <div class="footer-area black-bg">
        <div class="container">
            <div class="footer-top footer-padding">
                <!-- Footer Menu -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-footer-caption mb-50 text-center">
                            <!-- logo -->
                            <div class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <a href="index.php"><img src="logo.jpg" style="height: 200px; width:200px"></a>
                            </div>
                            <!-- Menu -->
                            <!-- Header Start -->
                            <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                <div class="main-header main-header2">
                                    <div class="menu-wrapper menu-wrapper2">
                                        <!-- Main-menu -->
                                        <div class="main-menu main-menu2 text-center">
                                            <nav>
                                                <ul>
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="about.php">About</a></li>
                                                    <li><a href="courses.php">Expert Insights</a></li>
                                                    <li><a href="pricing.php">Diet Planner</a></li>
                                                    <li><a href="gallery.php">Gallery</a></li>
                                                    <li><a href="contact.php">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            <!-- Header End -->
                            <!-- social -->
                            <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s" data-wow-delay=".8s">
                                <a href="https://www.youtube.com/channel/UCj1MmmYmX7AHpZye7481Z-A" target=_blank><i class="fab fa-youtube"></i></a>
                                <a href="https://www.instagram.com/fitness_freak_/" target=_blank><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/vatsal-shah-a7a0b1255/" target=_blank><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            &copy;<script>document.write(new Date().getFullYear());</script> Fitness Freak All rights reserved</a>
                              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Footer End-->
  </footer>
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>



<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>


</body>
</html>