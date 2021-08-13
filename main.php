<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>PHP Practice</title>
    <link rel = "stylesheet" href = "style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <div class = "flex_container">

        <div class = "header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </div>

        <div class = "about_me">
            <h1><?php echo $p ?></h1>

            <div class = "information">
                <div class = "image">
                    <?php echo '<img src = "img/my_image.jpg">'?>
                </div>
                <div class = "article">
                    <p class = "text">
                        Did you know, that most developers hate PHP? PHP <br>
                        has the reputation of being "the poor cousin" of scripting <br>
                        languages, because it's a technically inconsistent <br>
                        language with a bad design. People also say that <br>
                        the worst trio is PHP, JavaScript and C++. But <br>
                        who cares about people's opinion, right? 
                    </p>
                </div>
            </div>
        </div>
        

        <div class = "knowledge">
            <?php include 'knowledge.inc.php' ?>
            <?php echo $a, ' ', $b, $c ?> <br>

            <?php 
             $a = 6;
             $b = 7;
             $c = $a * $b;
             echo $c;
            ?> 
            <div class = "name">
                <p>
                    Моё имя
                    <?php 
                        echo $name, ' ', $surname;
                        echo 'город', ' ', $city;
                    ?>
                </p>
                <p>
                    Мне <?php echo $age ?> лет
                </p>
                <p>Мы научились создавать переменные </p>
                <p>Изучили простые опереции с ними! </p>
            </div>
        </div>
        <?php include 'footer.inc.php' ?>
    </div>
</body>