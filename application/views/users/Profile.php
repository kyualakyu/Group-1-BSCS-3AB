<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCreate Seller | Dashboard</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.svg');?>">

    <!-- ===== BOX ICONS ===== -->
    <script src="https://kit.fontawesome.com/871663cc04.js" crossorigin="anonymous"></script>

    <!-- ===== GOOGLE FONTS ===== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nav-styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/footer-styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/buyer-profile-styles.css')?>">
</head>

<body>
    <div class="big-wrapper light">
        <header>
            <div class="nav-container">
                <div class="logo">
                    <!-- ===== IF BUYER, REDIRECT TO BUYERHOMEPAGE, IF SELLER, REDIRECT TO SELLERHOMEPAGE ===== -->
                    <a href="<?php echo base_url()."users/userSort"?>"><img src="<?php echo base_url('assets/img/buyer-logo.svg')?>" class="header-logo"></a>
                </div>

                <div class="links">
                    <ul>
                        <li><a href="<?php echo base_url()."users/userSort"?>">Home</a></li>
                        <li><a href="<?php echo base_url()."messaging/inbox"?>">Messages</a></li>
                        <li><a href="<?php echo base_url()."categories/"?>">Browse by Category</a></li>
                        <li><a href="<?php echo base_url()."users/profile"?>">Profile</a></li>
                        <li><a href="<?php echo base_url()."users/editprofile"?>">Settings</a></li>
                        <li><a href="<?php echo base_url()."users/logout"?>">Log Out</a></li>
                    </ul>
                </div>

                <div class="overlay"></div>

                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </header>
    </div>

    <section class="seller-profile">
        <div class="profile-section">
            <div class="container">
                <div class="profile-card">
                    <div class="profile-icon-container">
                        <div class="profile-icon">
                            <img src="<?php echo $user['profilepic']?>" alt="profile">
                        </div>
                    </div>

                    <div class="profile-details">
                        <div class="name-container">
                            <div class="name-with-button">
                                <h3 class="full-name"><?php echo $user['usersName']?></h3>
                                <h4 class="username">@<?php echo $user['usersUid']?></h4>
                            </div>

                            <div class="profile-actions">
                                <button>
                                    <a href="<?php echo base_url()."users/editprofile"?>" class="edit-profile-btn">EDIT PROFILE</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="profile-card">
                    <div class="profile-details">
                        <div class="extra-profile-details">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Manila City</p>
                        </div>

                        <div class="extra-profile-details">
                            <i class="fas fa-envelope"></i>
                            <p><?php echo $user['usersEmail']?></p>
                        </div>

                        <div class="extra-profile-details">
                            <i class="fas fa-phone"></i>
                            <p>0912 345 6789</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER STARTS HERE -->

    <div class="creator-popup center roms-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="/img/creator-img.jpg">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Romeo Rojo</h2>
                </div>

                <div class="creator-details">
                    <p>GoCreate Final Boss</p>
                </div>

                <div class="creator-details">
                    <ul>
                        <li><a href="https://www.instagram.com/seanabalora/" target="_blank"
                                class="underline">Instagram</a></li>
                        <li><a href="https://abasushi.github.io/seanabalora/" target="_blank"
                                class="underline">Roms.</a></li>
                    </ul>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="roms-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="creator-popup center dylan-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="/img/creator-img.jpg">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Dylan Jabla</h2>
                </div>

                <div class="creator-details">
                    <p>Nation's Backend</p>
                </div>

                <div class="creator-details">
                    <ul>
                        <li><a href="https://www.instagram.com/seanabalora/" target="_blank"
                                class="underline">Instagram</a></li>
                        <li><a href="https://abasushi.github.io/seanabalora/" target="_blank"
                                class="underline">Dylan.</a></li>
                    </ul>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="dylan-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="creator-popup center errol-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="/img/creator-img.jpg">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Errol John Lagera</h2>
                </div>

                <div class="creator-details">
                    <p>Oh? You mean Backend King?</p>
                </div>

                <div class="creator-details">
                    <ul>
                        <li><a href="https://www.instagram.com/seanabalora/" target="_blank"
                                class="underline">Instagram</a></li>
                        <li><a href="https://abasushi.github.io/seanabalora/" target="_blank"
                                class="underline">Lagera.</a></li>
                    </ul>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="errol-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="creator-popup center aba-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="/img/creator-img.jpg">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Sean David Abalora</h2>
                </div>

                <div class="creator-details">
                    <p>Frontend Center!</p>
                </div>

                <div class="creator-details">
                    <ul>
                        <li><a href="https://www.instagram.com/seanabalora/" target="_blank"
                                class="underline">Instagram</a></li>
                        <li><a href="https://abasushi.github.io/seanabalora/" target="_blank"
                                class="underline">Aristotle.</a></li>
                    </ul>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="aba-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="creator-popup center ros-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="/img/creator-img.jpg">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Rosario Imelda Cuevas</h2>
                </div>

                <div class="creator-details">
                    <p>GoCreate Girl Boss</p>
                </div>

                <div class="creator-details">
                    <ul>
                        <li><a href="https://www.instagram.com/seanabalora/" target="_blank"
                                class="underline">Instagram</a></li>
                        <li><a href="https://abasushi.github.io/seanabalora/" target="_blank"
                                class="underline">tigerlilith.</a></li>
                    </ul>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="ros-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="creator-popup center saey-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="/img/creator-img.jpg">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Saeymond Charles Serrano</h2>
                </div>

                <div class="creator-details">
                    <p>Responsiveness expert coming through!</p>
                </div>

                <div class="creator-details">
                    <ul>
                        <li><a href="https://www.instagram.com/seanabalora/" target="_blank"
                                class="underline">Instagram</a></li>
                        <li><a href="https://abasushi.github.io/seanabalora/" target="_blank"
                                class="underline">saeymond.</a></li>
                    </ul>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="saey-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-section">
        <div class="footer-container">
            <h1>Let's GoCreate!</h1>
            <span class="footer-divider"></span>

            <div class="footer">
                <div class="footer-row">
                    <div class="footer-column">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="category-digital-art.html" class="underline">Digital Art</a></li>
                            <li><a href="category-graphic-design.html" class="underline">Graphic Design</a></li>
                            <li><a href="category-photography.html" class="underline">Photography</a></li>
                            <li><a href="category-publication-material.html" class="underline">Publication Material</a></li>
                            <li><a href="category-traditional-art.html" class="underline">Traditional Art</a></li>
                            <li><a href="category-typography.html" class="underline">Typography</a></li>
                            <li><a href="category-website-design.html" class="underline">Website Design</a></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h3>Creators</h3>
                        <ul>
                            <li><button class="underline" id="creator-roms">Rojo</button></li>
                            <li><button class="underline" id="creator-dylan">Jabla</button></li>
                            <li><button class="underline" id="creator-errol">Lagera</button></li>
                            <li><button class="underline" id="creator-aba">Abalora</button></li>
                            <li><button class="underline" id="creator-ros">Cuevas</button></li>
                            <li><button class="underline" id="creator-saey">Serrano</button></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h3>Socials</h3>
                        <ul>
                            <li><a href="#" class="underline">Facebook</a></li>
                            <li><a href="#" class="underline">Instagram</a></li>
                            <li><a href="#" class="underline">Twitter</a></li>
                        </ul>

                        <div class="say-hi">
                            <h3>Say Hi!</h3>

                            <div class="e-mail">
                                <h2 class="underline" id="copy-email">gocreate@gmail.com</h2>
                                <div class="popup">
                                    <h4>Copied to Clipboard!</h4>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>

            <span class="footer-divider"></span>

            <div class="footer-rights-container">
                <div class="footer-logo">
                    <a href="#">
                        <img src="<?php echo base_url('assets/img/logo.svg')?>">
                    </a>
                    <h3>GoCreate</h3>
                </div>

                <div class="footer-rights">
                    <p>Team Roms &copy; 2022</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- ===== JS ===== -->
    <script src="<?php echo base_url();?>assets/js/nav-script.js"></script>
    <script src="<?php echo base_url();?>assets/js/footer-script.js"></script>
</body>

</html>