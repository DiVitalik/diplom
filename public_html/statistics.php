<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>CarApp</title>
</head>

<body>
    <div class="header ">
        <header >
                Отчеты
        </header>
    </div>
    <a href="main.php" >
        <img class="logo-header back-style" src="img/back.png" alt="">
    </a>
    <div class="container">

        <h1 class="text text-center">Итого</h1>
        <hr />

        <h2 class="text">Стоимость</h2>
        <div class="flex-container">

                    <div><p class="text-color">Итого</p>
                    <?php require('sum_price.php');
                        echo '<td>'.$common_price_per_km.' &#8381 </td>';
                    ?></div>

                    <div><p class="text-color">По км</p>
                    <?php require('sum_price.php');
                        echo '<td>'.$price_per_km.' &#8381</td>';
                    ?>
                    </div>

        </div>
        <hr />

        <h2 class="text">Растояние</h2>
        <div class="flex-container">
                <div><p class="text-color">Итого</p>
                    <?php require('sum_price.php');
                        echo '<td>'.$result_odom.' Км</td>';
                    ?>
                </div>
                <div><p class="text-color">Среднеусточная</p>

                    <?php require('sum_price.php');
                        echo '<td>',round($result_odom/30.5,2),' Км</td>';
                    ?>
                </div>
        </div>
        <hr />


        <h1 class="text text-center">Заправка</h1>
        <hr />

        <h2 class="text">Стоимость</h2>
        <div class="flex-container">
                    <div><p class="text-color">Итого</p>
                    <?php require('sum_price.php');
                        echo '<td>'.$sum_oil.' &#8381</td>';
                    ?>
                   </div>
                    <div><p class="text-color">За день</p>
                    <?php require('sum_price.php');
                        echo '<td>'.round($sum_oil/30.5,2).' &#8381</td>';
                    ?>
                    </div>

                    <div><p class="text-color">По км</p>
                    <?php require('sum_price.php');
                        echo '<td>'.$oil_price_per_km.' &#8381</td>';
                    ?>
                    </div>
        </div>
        <hr />

        <h2 class="text">Топливо</h2>
        <div class="flex-container">
                    <div><p class="text-color">Общий объем</p>
                    <?php require('sum_price.php');
                        echo '<td>'.$sql_oil_value.' L</td>';
                    ?></div>
                    <div><p class="text-color">Общее среднее</p>
                    <?php require('sum_price.php');
                        echo '<td>'.($sql_oil_value/100).' L/100 км</td>';
                    ?> </div>
        </div>
        <hr />


        <h1 class="text text-center">Сервис</h1>
        <hr />

        <h2 class="text">Стоимость</h2>
        <div class="flex-container">
                    <div><p class="text-color">Итого</p>
                    <?php require('sum_price.php');
                        echo '<td>'.$sql_sersice_price.' &#8381</td>';
                    ?>
                   </div>
                    <div><p class="text-color">Общее среднее</p>
                    <?php require('sum_price.php');
                        echo '<td>'.round($sql_sersice_price/30.5,2).' &#8381</td>';
                    ?>
                    </div>
        </div>
        <hr />



        <h1 class="text text-center">Прочие расходы</h1>
        <hr />

        <h2 class="text">Стоимость</h2>
        <div class="flex-container">
                    <div><p class="text-color">Итого</p>
                    <?php require('sum_price.php');
                        echo '<td>'.$sql_payment_price.' &#8381</td>';
                    ?>
                   </div>
                    <div><p class="text-color">Общее среднее</p>
                    <?php require('sum_price.php');
                        echo '<td>'.round($sql_payment_price/30.5,2).' &#8381</td>';
                    ?>
                    </div>
        </div>
        <hr />



    </div>

    </div>

    <footer class="footer">
            <a href="main.php" >
                    <img class="logo-header" src="img/date_4.png" alt="">
            </a>
            <a href="addition.php" >
                    <img class="logo-header" src="img/add_9.png" alt="">
            </a>
            <a href="statistics.php" >
                    <img class="logo-header" src="img/rate2_7.png" alt="">
            </a>
    </footer>

</body>
</html>
