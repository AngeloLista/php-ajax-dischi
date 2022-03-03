<?php
include __DIR__ . '/includes/data/discs.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous' />
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" sizes="32x32" type="image/png" href="https://open.scdn.co/cdn/images/favicon32.8e66b099.png" />
    <title>PHP Dischi</title>
</head>

<body>
    <header class="d-flex justify-content-start align-items-center">
        <img src="img/spotify-logo.png" alt="Spotify Logo" />
    </header>
    <main>
        <section id="albums" class="container">
            <?php foreach ($discs as $disc) : ?>
                <div class="album-card-container">
                    <div class="album-card">
                        <img src="<?= $disc['poster'] ?>" alt="<?= $disc['title'] ?>" class="img-fluid">
                        <h5><?= $disc['title'] ?></h5>
                        <div class="description">
                            <span class="author"><?= $disc['author'] ?></span>
                            <span class="year"><?= $disc['year'] ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
</body>

</html>