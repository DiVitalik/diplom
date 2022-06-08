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
                ������ �������
    </div>
    <a href="addition.php" >
        <img class="logo-header back-style" src="img/back.png" alt="">
    </a>
    <div class="container ">

    <table class="text-center">
                <tr>

                        <td><img class="ikon-history " src="img/date_4.png" alt=""></td>
                        <td>����<input name="date_payment" type="date" min="0" class="form-control" ></td>
                        <td>���<input name="time_payment" type="time" class="form-control" ></td>
                </tr>
                <tr>
                        <td><img class="ikon-history" src="img/speed_5.png" alt=""></td>
                        <td colspan="3">��������� ��������� �������� 100��<input name="odom_payment" type="number" min="0" class="form-control" placeholder="������� (��)" aria-label="������� (��)"></td>
                </tr>
                <tr>
                <td><img class="ikon-history" src="img/calculating.png" alt=""></td>
                        <td >��� �������
                                 <!-- <input type="text"  class="form-control" placeholder="���������" aria-label="���������"> -->
                                <div >
                                    <select class="form-control" name="type_payments">
                                        <option value="���������">���������</option>
                                        <option value="����������">����������</option>
                                        <option value="�����">�����</option>
                                        <option value="������">������</option>
                                        <option value="��������">��������</option>
                                        <option value="�������">�������</option>
                                        <option value="�����������">�����������</option>
                                        <option value="�����">�����</option>
                                       </select>
                                </div>
                        </td>
                        <td colspan="3">����<input name="price_payment" type="number" min="0" class="form-control" ></td>
                </tr>

                <td><img class="ikon-history" src="img/briefcase.png" alt=""></td>
                        <td colspan="3">
                                ��� �������
                                <!-- <input type="text"  class="form-control" placeholder="�������/������" aria-label="�������/������"> -->

                                <div >
                                    <select class="form-control" name="type_expenses">
                                        <option value="������">������</option>
                                        <option value="�������">�������</option>
                                    </select>
                                </div>
                        </td>
                </tr>




        </table>

    </div>
    <footer class="footer style-oil">

<div class="style " >
            <button type="submit" class="btn btn-light style-padding container rounded-pill">������� ������</button>
            <button type="reset" class="btn btn-secondary   style-padding container rounded-pill ">��������</button>

</div>
</footer>
    </form>


</body>
</html>


