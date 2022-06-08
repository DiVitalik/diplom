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
    <form action="create_payment.php" method="POST">

    <div class="header style-payment ">
                Прочие расходы
    </div>
    <a href="addition.php" >
        <img class="logo-header back-style" src="img/back.png" alt="">
    </a>
    <div class="container ">

    <table class="text-center">
                <tr>

                        <td><img class="ikon-history " src="img/date_4.png" alt=""></td>
                        <td>Дата<input name="date_payment" type="date" min="0" class="form-control" ></td>
                        <td>Час<input name="time_payment" type="time" class="form-control" ></td>
                </tr>
                <tr>
                        <td><img class="ikon-history" src="img/speed_5.png" alt=""></td>
                        <td colspan="3">Последнее показания одометра 100км<input name="odom_payment" type="number" min="0" class="form-control" placeholder="Одометр (км)" aria-label="Одометр (км)"></td>
                </tr>
                <tr>
                <td><img class="ikon-history" src="img/calculating.png" alt=""></td>
                        <td >Вид расхода
                                 <!-- <input type="text"  class="form-control" placeholder="Автомойка" aria-label="Автомойка"> -->
                                <div >
                                    <select class="form-control" name="type_payments">
                                        <option value="Автомойка">Автомойка</option>
                                        <option value="Возмещение">Возмещение</option>
                                        <option value="Налог">Налог</option>
                                        <option value="Оплата">Оплата</option>
                                        <option value="Парковка">Парковка</option>
                                        <option value="Пошлины">Пошлины</option>
                                        <option value="Регистрация">Регистрация</option>
                                        <option value="Штраф">Штраф</option>
                                       </select>
                                </div>
                        </td>
                        <td colspan="3">Цена<input name="price_payment" type="number" min="0" class="form-control" ></td>
                </tr>

                <td><img class="ikon-history" src="img/briefcase.png" alt=""></td>
                        <td colspan="3">
                                Тип расхода
                                <!-- <input type="text"  class="form-control" placeholder="Поездка/Работа" aria-label="Поездка/Работа"> -->

                                <div >
                                    <select class="form-control" name="type_expenses">
                                        <option value="Работа">Работа</option>
                                        <option value="Поездка">Поездка</option>
                                    </select>
                                </div>
                        </td>
                </tr>




        </table>

    </div>
    <footer class="footer style-oil">

<div class="style " >
            <button type="submit" class="btn btn-light style-padding container rounded-pill">Создать запись</button>
            <button type="reset" class="btn btn-secondary   style-padding container rounded-pill ">Очистить</button>

</div>
</footer>
    </form>


</body>
</html>


