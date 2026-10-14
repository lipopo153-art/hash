<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form class="reg">
        <div class="register">
    <label for="inputLogin" class="col-sm-2 col-form-label">Логин</label>
    <div class="col-sm-10">
      <input type="login" class="form-control" id="login">
    </div>
  </div>   
  <div class="register">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Эл. почта</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" required placeholder="example@mail.com">
    </div>
  </div>
  <div class="register">
    <label for="inputFName" class="col-sm-2 col-form-label">ФИО</label>
    <div class="col-sm-10">
      <input type="FName" class="form-control" id="inputFName">
    </div>
    <div class="register">
    <label for="inputPhone" class="col-sm-2 col-form-label">Телефон</label>
    <div class="col-sm-10">
      <input type="Phone" class="form-control" id="inputPhone">
    </div>
    <label for="inputPass" class="col-sm-2 col-form-label">Пароль</label>
    <div class="col-sm-10">
      <input type="pass" class="form-control" id="pass">
    </div>
  </div>
  <a class="btn btn-primary" href="card.php" role="button">Войти</a>
    <a class="btn btn-primary" href="auth.php" role="button">Еще не зарегистрированы? Создайте аккаунт</a>
  </div>
</form>
</body>
</html>