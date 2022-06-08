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

        <header class="header">
        <div class="d-flex justify-content-between">
                <a href="https://t.me/WakeUp_d"><img  class="help" src="img/help.png" alt=""  width="24" height="24"></a>
                История
                <?php
                $user_id = $_COOKIE['userid'];

                if ($_COOKIE['user'] == ''):
                ?>
                <?php else:?>
                    <a href="./index.php"><img    src="img/logout.png" alt=""  width="24" height="24"></a>
                <?php endif;?>
        </div>
        </header>



    <div class="container">

        <!-- форма -->
        <div class="border rounded overflow-hidden p-3 bg-secondary text-light stat-form">
                <h3>Статистика</h3>
                <hr class="content" />
                <table class="flex-container ">
                    <tr >
                        <td>Расходы</td>
                        <?php require('sum_price.php');
                        echo '<td>'.$result.' &#8381 </td>';
                        ?>
                    </tr>
                </table>
                <table class="flex-container ">
                    <tr >
                        <td rowspan="2" ><img class="ikon" src="img/oil_1.png" alt="Заправка"></td>
                        <td>Топливо</td>
                        <td rowspan="2"><img class="ikon" src="img/service_2.png" alt="Сервис"></td>
                        <td>Сервис</td>
                        <td rowspan="2"><img class="ikon" src="img/rate_3.png" alt="Расход"></td>
                        <td>Расход</td>
                    </tr>
                    <tr >
                    <?php require('sum_price.php');
                        echo '<td>'.$percent_oil.'% </td>';
                        echo '<td>'.$percent_service.'% </td>';
                        echo '<td>'.$percent_payment.'% </td>';
                    ?>
                    </tr>
                </table>


                <div class="style " >
                    <a href="statistics.php"><button type="reset" class="btn btn-dark style-padding container rounded-pill">Полный отчет</button></a>

                </div>
            </div>
        <hr />

            <?php
            require('connect_db.php');
            require('sort_date.php');

            foreach ($sort as $row) :
            ?>
                <? if ($row->name=="Заправка"): ?>
                <p><?= $row->name?></p>

                    <div class="flex-container">

                        <div class="flex-item">
                            <p><img class="ikon-history" src="img/date_4.png" alt="">&nbsp<?= $row->date ?></p>
                            <p> <img class="ikon-history" src="img/speed_5.png" alt="">&nbsp<?= $row->odometr ?> Км</p>
                        </div>

                        <div class="flex-item">
                            <p><img class="ikon-history" src="img/petrol_6.png" alt="">&nbsp<?= $row->oil_type ?></p>
                            <p> <img class="ikon-history" src="img/rate2_7.png" alt="">&nbsp<?= $row->value ?> L</p>
                        </div>
                    </div>

                    <div class="d-flex">
                            <p class="p-2 w-100" style="color:red;">Цена <?= $row->price ?> &#8381</p>
                            <btn>
                                <a href="delete_oil.php?id=<?= $row->id ?>">
                                    <img class="ikon-history flex-shrink-1" src="img/delete.png" alt="">
                                </a>
                            </btn>
                    </div>
                    <hr />

                    <? elseif ($row->name=="Сервис"): ?>
                    <div><?= $row->name?></div>

                        <div class="flex-container">
                            <div class="flex-item">
                                <p><img class="ikon-history" src="img/date_4.png" alt="">&nbsp<?= $row->date ?></p>
                                <p> <img class="ikon-history" src="img/speed_5.png" alt="">&nbsp<?= $row->odometr ?> Км</p>
                            </div>

                            <div class="flex-item">
                                <p><img class="ikon-history" src="img/calculating.png" alt="">&nbsp<?= $row->type ?></p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <p class="p-2 w-100" style="color:red;">Цена <?= $row->price ?> &#8381</p>
                            <btn>
                                <a href="delete_service.php?id=<?= $row->id ?>">
                                    <img class="ikon-history flex-shrink-1" src="img/delete.png" alt="">
                                </a>
                            </btn>
                        </div>
                        <hr />



                <? elseif ($row->name=="Прочие расходы"): ?>


                <div><?= $row->name?></div>
                <div class="flex-container">
                    <div class="flex-item">
                        <p><img class="ikon-history" src="img/date_4.png" alt="">&nbsp<?= $row->date ?></p>
                        <p> <img class="ikon-history" src="img/speed_5.png" alt="">&nbsp<?= $row->odometr ?> Км</p>
                    </div>
                    <div class="flex-item">
                        <p><img class="ikon-history" src="img/calculating.png" alt="">&nbsp<?= $row->type ?></p>
                        <p> <img class="ikon-history" src="img/briefcase.png" alt="">&nbsp<?= $row->type_expense ?></p>
                    </div>
                </div>
                <div class="d-flex">
                        <p class="p-2 w-100" style="color:red;">Цена <?= $row->price ?> &#8381</p>
                        <btn>
                            <a href="delete_payment.php?id=<?= $row->id ?>">
                                <img class="ikon-history flex-shrink-1" src="img/delete.png" alt="">
                            </a>
                        </btn>
                </div>
                <hr />
            <? endif; ?>
            <?php endforeach?>
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