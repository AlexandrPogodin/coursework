<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Виртуальная лабораторная работа по теме цилиндр</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="js/three.js"></script>
</head>

<body>
    <?php
        if (count($_GET) > 0){
            $r = $_GET['r'];
            $h = $_GET['h'];
        }else {
            $r = 3;
            $h = 20;
        }
        $pi = pi();
        $v = $pi * pow($r , 2) * $h;
        $s = 2 * $pi * $r * $h;
?>

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <h1 class="title is-4">POGODIN</h1>
            </a>
        </div>
    </nav>

    <div class="container block1">
        <div class="columns">
            <div class="is-three-quarters blackbg">
                <?php
                include 'libs/render-simple.php';
                ?>
            </div>
        </div>
    </div>
    <div class="container block2">
        <div class="columns">
            <div class="column is-4 is-offset-2" align="center">

                <h1 class="title is-4">Задай свои параметры</h1>
                <form action="#" method="GET">
                    <input required class="input" type="text" placeholder="Радиус основания" name="r"><br><br>
                    <input required class="input" type="text" placeholder="Высота цилиндра" name="h"><br><br>
                    <input class="button is-primary is-outlined" type="submit" value="Обновить">
                </form>
            </div>
            <div class="column is-4" align="center">

                <h1 class="title is-4">Объем и площадь поверхности цилиндра</h1>
                <p>Дано: r=
                    <?= $r ?>см , h=
                    <?= $h ?>см.
                </p>
                <br>
                <p>Объем =
                    <?= $v ?>см³
                </p>
                <p>Площадь поверхности =
                    <?= $s ?>см²
                </p>
            </div>
        </div>
    </div>
    <hr>
    <div>
        <?php include('footer.php'); ?>
    </div>
</body>

</html>