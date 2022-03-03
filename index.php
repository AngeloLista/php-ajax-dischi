<?php
include __DIR__ . '/includes/data/discs.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header></header>
    <main>
        <div class="album-card">
            <?php foreach ($discs as $disc) : ?>
                <img src="<?= $disc['poster'] ?>" alt="<?= $disc['title'] ?>">
                <h5><?= $disc['title'] ?></h5>
                <div class="description">
                    <span class="author"><?= $disc['author'] ?></span>
                    <span class="year"><?= $disc['year'] ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>