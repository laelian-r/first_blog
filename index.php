<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="navbar">
            <h2>My blog</h2>

            <nav>
                <ul>
                    <li>
                        <a href="#" class="active"><img class="img-active" src="./assets/house-active.svg" alt="home-icon"> Home</a>
                    </li>
                    <li>
                        <a href="./pages/saved.html"><img src="./assets/heart-icon.svg" alt="saved-icon"> Saved</a>
                    </li>
                    <li>
                        <a href="./pages/infos.html"><img src="./assets/info-icon.svg" alt="info-icon"> Infos</a>
                    </li>
                </ul>
            </nav>

            
            <a href="./pages/profile.html" class="profile-link"><img src="./assets/user-icon.svg" alt="user-icon"> Profile</a>
        </div>

        <section>
            <?php
                $image = "https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg";
                $title = "Hello world!";
                $description = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum vero mollitia, blanditiis est fugiat nisi...";
                $profil = "https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg";
                $username = "John Doe";
                $date = "24/09/2024";
            ?>

            <article>
                <i class="fa-regular fa-heart"></i>
                <div class="img-container">
                    <img class="cover" src="<?php echo $image ?>" alt="Illustration">
                </div>
                <header>
                    <h2 class="title"><?php echo $title ?></h2>
                    <p class="description"><?php echo $description ?></p>
                </header>
                <footer class="info-profil">
                    <img class="pp" src="<?php echo $profil ?>" alt="Photo de profil">
                    <div class="info-post">
                        <h3 class="username"><?php echo $username ?></h3>
                        <p class="date"><?php echo $date ?></p>
                    </div>
                </footer>
            </article>
        </section>
    </header>

    <script src="./main.js"></script>
</body>
</html>