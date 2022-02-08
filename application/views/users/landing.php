<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCreate</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets//img/logo.svg')?>">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== GOOGLE FONTS ===== -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Goblin+One&family=Noto+Serif+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&family=Ranchers&family=Slackey&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css')?>">
</head>
<body>
    <header>
        <nav class="nav-container">
            <div class="logo">
                <a href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/img/logo.svg')?>" class="header-logo"></a>
                <h3>GoCreate</h3>
            </div>

            <div class="nav-toggle-btn" id="nav-toggle-btn">
                <i class='bx bx-menu'></i>
            </div>

            <div class="nav-menu" id="nav-menu">
                <div class="nav-close-btn" id="nav-close-btn">
                    <i class='bx bx-x'></i>
                </div>
            
                <ul class="nav-list">
                    <li class="nav-item"><a href="#about-section" class="nav-link">Explore</a></li>
                    <li class="nav-item"><a href="<?php echo base_url()."users/login"?>" class="nav-link">Sign In</a></li>
                    <li class="nav-item"><a href="<?php echo base_url()."users/signup"?>" class="nav-link btn">Join</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="splash-area">
        <div class="splash-container">
            <div class="left-area">
                <div class="title" id="title">
                    <h1>Hey there, creative. Welcome to GoCreate!</h1>
                </div>

                <div class="text" id="text">
                    <p>Ready to start your creative journey in offering freelance services?</p>
                </div>

                <a href="<?php echo base_url()."users/signup"?>" class="join-btn" id="join-btn">JOIN HERE</a>
            </div>

            <div class="right-area">
                <img src="<?php echo base_url('assets/img/splash-img.svg')?>" alt="Creatives" class="creatives" id="creatives">
                <!-- <img src="img/splash-img-05.svg" data-speed="-2" class="move">
                <img src="img/splash-img-04.svg" data-speed="2" class="move">
                <img src="img/splash-img-03.svg" data-speed="-2" class="move">
                <img src="img/splash-img-02.svg" data-speed="2" class="move">
                <img src="img/splash-img-01.svg" data-speed="-2" class="move"> -->
            </div>
        </div>
    </section>

    <section class="about-section" id="about-section">
        <div class="about-container">
            <div class="row">
                <div class="img-box">
                     <img src="" alt="">
                </div>

                <div class="text-box">
                    <div class="text-box-container">
                        <div class="text-box-title">
                            <h1>What</h1>
                        </div>

                        <div class="text-box-description">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil sed deserunt quaerat aliquam optio quia. Dolor iure minima voluptatibus quidem, deserunt nostrum eius nisi qui quos pariatur, excepturi fuga sunt provident voluptatem quisquam sequi esse ex, dolores quam. Voluptatum ad labore facilis voluptate eius eos numquam, aut inventore facere maiores.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="text-box">
                    <div class="text-box-container">
                        <div class="text-box-title">
                            <h1>Hello</h1>
                        </div>

                        <div class="text-box-description">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil sed deserunt quaerat aliquam optio quia. Dolor iure minima voluptatibus quidem, deserunt nostrum eius nisi qui quos pariatur, excepturi fuga sunt provident voluptatem quisquam sequi esse ex, dolores quam. Voluptatum ad labore facilis voluptate eius eos numquam, aut inventore facere maiores.</p>
                        </div>
                    </div>
                </div>

                <div class="img-box">
                    <img src="" alt="">
                </div>
            </div>

            <div class="row">
                <div class="img-box">
                    <img src="" alt="">
                </div>

                <div class="text-box">
                    <div class="text-box-container">
                        <div class="text-box-title">
                            <h1>Hai</h1>
                        </div>

                        <div class="text-box-description">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil sed deserunt quaerat aliquam optio quia. Dolor iure minima voluptatibus quidem, deserunt nostrum eius nisi qui quos pariatur, excepturi fuga sunt provident voluptatem quisquam sequi esse ex, dolores quam. Voluptatum ad labore facilis voluptate eius eos numquam, aut inventore facere maiores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-area">
        <div class="banner-container">
            <div class="banner">
                <div class="banner-text">
                    <div class="text-box-container">
                        <div class="text-box-title">
                            <h1>Lorem Ipsum</h1>
                        </div>

                        <div class="text-box-description">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil sed deserunt quaerat aliquam optio quia. Dolor iure minima voluptatibus quidem, deserunt nostrum eius nisi qui quos pariatur, excepturi fuga sunt provident voluptatem quisquam sequi esse ex, dolores quam. Voluptatum ad labore facilis voluptate eius eos numquam, aut inventore facere maiores.</p>
                        </div>
                    </div>
                </div>

                <div class="banner-img">
                    
                </div>
            </div>
        </div>
    </section>

    <!--===== GSAP =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    
    <!-- ===== JS ===== -->
    <script src="<?php echo base_url('assets/js/landing-page.js')?>"></script>
</body>
</html>