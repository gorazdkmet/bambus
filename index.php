<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- force IE newest engine -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- device width is same as viewport -->
    <meta name="author" content="Gorazd Kmeť">
    <meta name="description" content="Informácie o stránke">
    <meta name="keywords" content="Kľúčové slová zo stránky">
    <title>Bambus Šancová</title>
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.9-1/dist/css/ionicons.min.css"> <!-- Ionic Framework -->
    <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo&display=swap" rel="stylesheet"> <!-- Google Font -->
    <link rel="stylesheet" href="vendor/all.css"> <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500&display=swap&subset=latin-ext" rel="stylesheet">
    <!-- Google Font -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png"> <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png"> <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"> <!-- Favicon -->
</head>

<body>
    <header>
        chyba? pripomienka? neaktuálne informácie? napíš na <span class="email">gorazd.kmet@outlook.com</span>
    </header>
    <main>
        <div class="headline">
            <p>Fanúšikovská stránka</p>
            <h1>Bambus bistro</h1>
            <p>Šancová 16, Bratislava</p>
            <span class="emoji">&#127836;</span>
        </div>
        <div class="img-container wrapper">
            <ul>
                <?php

                        include 'php/db.php';

                        foreach ($meals as $key => $meal)
                        {
                            $foto = glob('img/menu/'.$meal['number'].'/*');

                            echo '<li><a href="php/meal.php?id='.$meal['number'].'"><span>'.$meal['number'].'</span><img src="'.$foto[0].'"/></a></li>';
                        };
                    ?>
            </ul>
        </div>
    </main>
    <footer>Táto stránka nie je žiadnym spôsobom prepojená na majiteľov bistra Bambus.<br /> Za jej obsah je zodpovedný len gorazd.kmet@outlook.com</footer>
</body>

</html>
