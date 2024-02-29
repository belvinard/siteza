<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home section</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <?php
        require "menu.php";
    ?>

    <!-- ======================== header section ends ========================  -->

    <!--  ======================== Hero Section starts  ======================== -->
    <section id="hero" class="hide-on-load">

        <div class="hero hero-content" id="accueil">

            <div class="left">

                <div class="heading">
                    <h1>Hello, <span></span></h1>
                    <h1>My name is <span></span></h1>
                    <h1>Belvinard<span></span></h1>
                </div>

                <p class="desc"> I'm Full-stack developper</p>

                <div class="seeWork">
                    <a href="#projects" class="myWork">See my Works</a>
                    <a href="#projects" class="down"><div class="scroll-down"></div></a>
                </div>

            </div>

            <div class="right zoomable"><img src="image/presentation.png" alt="" class="image"></div>

        </div>

        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="fas fa-cog nut1"></div>
        <div class="fas fa-cog nut2"></div>

    </section>
    <!--  ======================== Hero Section ends  ======================== -->

    <!-- ======================== newsletter section starts ======================== -->

    <?php
        require "news.php";
    ?>
    <!-- ======================== newsletter section ends ======================== -->
</body>
</html>