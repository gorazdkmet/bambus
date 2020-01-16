<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- force IE newest engine -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- device width is same as viewport -->
    <title>Bambus Šancová</title>
    <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo&display=swap" rel="stylesheet"> <!-- Google Font -->
    <link rel="stylesheet" href="../vendor/all.css">  <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500&display=swap&subset=latin-ext" rel="stylesheet">
    <!-- Google Font -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png"> <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png"> <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png"> <!-- Favicon -->
    <link rel="manifest" href="../site.webmanifest"> <!-- Favicon -->
</head>
<body>
    <header>
        chyba? pripomienka? neaktuálne informácie? napíš na <span class="email">gorazd.kmet@outlook.com</span>
    </header>
    <main>
        <div class="headline">
            <a href="../index.php" class="headline">
                    <p>Fanúšikovská stránka</p>
                    <h1>Bambus bistro</h1>
                    <p>Šancová 16, Bratislava</p>
            </a>
        </div>
        <div class="main">
            <div class="main-container">
                <div class="main-img">
                    <?php
                        include '../php/db.php';

                        foreach ($meals as $key => $meal)
                            {
                                $number = $_GET['id'];
                                if ($meal['number'] == $number) {
                                    $foto = glob('../img/menu/'.$meal['number'].'/default*');
                                    echo '<img src="'.$foto[0].'" />';
                                } else continue;
                            };
                    ?>
                </div>
                <div class="main-info">
                    <table>
                        <?php
                        foreach ($meals as $key => $meal)
                            {
                                $number = $_GET['id'];
                                if ($meal['number'] == $number) {
                                    echo '<tr>';
                                    echo    '<th>#</th>';
                                    echo    '<td>'.$meal['number'].'</td>';
                                    echo '</tr>';
                                    echo '<tr>';
                                    echo    '<th>🇸🇰 <br>Slovenský názov</th>';
                                    echo    '<td>'.$meal['sk_name'].'</td>';
                                    echo '</tr>';
                                    echo '<tr>';
                                    echo    '<th>🇻🇳 <br>Vietnamský názov</th>';
                                    echo    '<td>'.$meal['viet_name'].'</td>';
                                    echo '</tr>';
                                    echo '<tr>';
                                    echo    '<th>Mäso</th>';
                                    echo    '<td>'.$meal['meat'].'</td>';
                                    echo '</tr>';
                                    echo '<tr>';
                                    echo    '<th>Príloha</th>';
                                    echo    '<td>'.$meal['side'].'</td>';
                                    echo '</tr>';
                                    echo '<tr>';
                                    echo    '<th>Zloženie</th>';
                                    echo    '<td>';
                                    if ($meal['ingredients']) {
                                        foreach($meal['ingredients'] as $ingredient) {
                                            echo $ingredient.', ';
                                        }
                                    } else echo 'Nie je uvedené';
                                    echo '</td>';
                                    echo '</tr>';
                                    echo '<tr>';
                                    echo    '<th>Cena</th>';
                                    echo    '<td>'.money_format('%.2n',$meal['price']).' €</td>';
                                    echo '</tr>';
                                } else continue; }
                        ?>
                    </table>
                </div>
            </div>
            <section class="section-container">
                <div class="thumb-bar"></div>
                <div class="upload" >
                    <form action="upload.php?id=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
                        <p>Nahraj vlastnú fotografiu jedla</p>
                        <input type="file" name="file">
                        <button type="submit" name="submit" >Upload</button>
                    </form>
                </div>
            </section>
            <section>
                <div class="comments" ></div>
            </section>
        </div>
    </main>
</body>
</html>
