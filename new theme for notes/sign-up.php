
    <?php
    require_once('common.php');
    require_once('config.php');
    require_once('db.php');
    ?>
<html>
  <head>
    <title>sign-up</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="base.css">
</head>
<body>
    <div class="tac">
    <img src="img/notepad.png" alt="notes" width="270px">
    <br>
    <div>
        <form action="sign-up-check.php" method="post" class="mt20">
        <input type="text" placeholder="name" name="name">
        <br>
        <input type="text" placeholder="nickname" name="nickname">
        <br>
        <input type="text" placeholder="Email" name="email">
        <br>
        <input type="password" placeholder="Password"  name="password1">
        <br>
        <input type="password" placeholder="Confirm Password" name="password2">
        <br>
        <div class="mt20">
        <button type="submit" class="btn w100">sign-up</button>
        <button type="reset" class="btn w100">reset</button>
        </form>
    </div>

    <div class=haveAccount>have an account?</div>
     <div class="mb50">
         <a href="sign-in.php"><button class="btn w100">sign-in</button></a>
         <a href="home.php"><button class="btn w100">home</button></a>
     </div>


</body>
</html>