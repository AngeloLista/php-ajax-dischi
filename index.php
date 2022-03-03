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
    <title>Document</title>
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