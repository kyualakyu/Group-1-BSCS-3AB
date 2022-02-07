<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCreate | Flex your beauty!</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="./img/logo.svg">

    <!-- ===== BOX ICONS ===== -->
    <script src="https://kit.fontawesome.com/871663cc04.js" crossorigin="anonymous"></script>

    <!-- ===== GOOGLE FONTS ===== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Goblin+One&family=Noto+Serif+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&family=Ranchers&family=Slackey&family=Syne:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css\login-signup-styles.css">
    <link rel="stylesheet" href="css\login-signup-nav-styles.css">
</head>

<body>
    <header>
        <nav class="nav-container">
            <div class="logo">
                <a class="header-logo" href="index.html"></a>
            </div>
        </nav>
    </header>

    <div class="overlay-design-container" id="overlay-design-container">
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel">
                    <h2 class="overlay-title">Flex your beauty!</h2>
                    <p class="overlay-description">Upload a profile picture for your profile.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="login-signup-container" id="login-signup-container">
        <div class="container">
            <div class="mobile-btn">
                <h3>Flex your beauty!</h3>
            </div>
            <div class="wrapper">
                <div class="image">
                    <img src="" id="photo">
                </div>

                <div class="content">
                    <div class="icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <div class="text">
                        Upload your profile picture <br><i>Photo must be in 1:1 ratio</i>
                    </div>
                </div>

                <div id="cancel-btn">
                    <i class="fas fa-times"></i>
                </div>

                <!-- <div class="file-name">
                    File name here
                </div> -->
            </div>
            <button onclick="defaultBtnActive()" id="custom-btn">Upload Photo</button>
            <input id="default-btn" type="file" accept="image/*" hidden required>
            <button class="proceed-btn">
                <a href="signup-preferred-categories.html">
                    Continue
                </a>
            </button>
        </div>
    </div>

    <!--===== GSAP =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <!-- ===== JS ===== -->
    <script src="js\login-signup-animations.js"></script>
    <script src="js/upload.js"></script>
</body>

</html>