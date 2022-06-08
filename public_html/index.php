<!doctype html>
<html  >
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- <meta charset="utf-8"> -->
     <link rel="manifest" href="manifest.json">

    <meta name="theme-color" content="#17a2b8">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="style/signin.css">
  </head>
  <body class="text-center">

<main class="form-signin w-100 m-auto">
  <form action="validation-form/check.php" method="post">
    <img class="mb-4" src="img/user_8.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">Регистрация</h1>
      <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
      <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
      <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
      <button class="btn btn-success w-100 btn-lg" type="submit">Продолжить</button>
  </form>
  <p class="mt-3 mb-5  text-muted">Eсли вы зарегистрировались нажмите <a href="./login.php"> <br> <br><button class="w-100 btn  btn-primary btn-lg" >Войти</button> </a></p>
  <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
</main>



  </body>
</html>
