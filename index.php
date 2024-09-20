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

            <div class="links-container">
                <nav>
                    <ul>
                        <li>
                            <a href="#" class="active"><img class="img-active" src="./assets/house-active.svg" alt="home-icon"> Homme</a>
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
        </div>

        <section>
            <?php echo "<h1>Home</h1>"; ?>
        </section>
    </header>

    <script src="./main.js"></script>
</body>
</html>