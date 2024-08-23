<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <title><?= $title; ?></title>
    </head>
    <body>

        <?php include './components/header.php'; ?>

        <main>
            <?= $content; ?>
        </main>

    </body>
</html>
