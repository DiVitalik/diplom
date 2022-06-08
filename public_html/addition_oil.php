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

    <form action="create_oil.php" method="POST">

    <div class="header style-oil ">
        Заправка
    </div>
    <a href="addition.php" >
        <img class="logo-header back-style" src="img/back.png" alt="">
    </a>

    <div class="container ">
        <table class="text-center">
                <tr>
                        <td><img class="ikon-history " src="img/date_4.png" alt=""></td>
                        <td>Дата<input name="date_oil" type="date" min="0" class="form-control"></td>
                        <td>Час<input name="time_oil" type="time" class="form-control"></td>
                </tr>
                <tr>
                        <td><img class="ikon-history" src="img/speed_5.png" alt=""></td>
                        <td colspan="3">Последнее показания одометра 100км<input name="odom_oil" type="number" min="0" class="form-control" placeholder="Одометр (км)" aria-label="Одометр (км)"></td>
                </tr>
                <tr>
                <td><img class="ikon-history" src="img/petrol_6.png" alt=""></td>
                        <td colspan="3">Топливо
                                <!-- <input type="text"  class="form-control" placeholder="Бензин АИ92" aria-label="Бензин АИ92"> -->
                                <div >
                                    <select class="form-control" name="type_oil">
                                        <option value="Gaz">Gaz</option>
                                        <option value="AI-92">AI-92</option>
                                        <option value="AI-95">AI-95</option>
                                        <option value="Dizel">Dizel</option>
                                    </select>
                                </div>
                        </td>
                </tr>

                <td>
                    <img class="ikon-history" src="img/petrol_6.png" alt=""></td>
                    <td>Цена/L<input name="price_oil" type="number" min="0" class="form-control" placeholder="Цена" aria-label="Цена"></td>
                    <td> Литры <input name="value_oil" type="number" min="0" class="form-control"></td>
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