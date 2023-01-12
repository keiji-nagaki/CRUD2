<?php
// エラー非表示
error_reporting(E_ERROR | E_PARSE | E_NOTICE);

if($_POST["pass"] === "manager"){
  header("Location: login_success_manager.php");
exit;
}
if($_POST["pass"] === "user"){
    header("Location: login_success_users.php");
exit;
}
?>
<html>
 <head>
  <meta charset="UTF-8">
  <title>ログイン</title>
  <link rel="stylesheet" href="css/test.css" type="text/css">
 </head>
 <body>
    <h1>ログインページ</h1>
    <h2>ログイン</h2>
<form method="POST" action="">
   <label>パスワード入力してください</label></br>
      <input type="text" name="pass" value=""></br></br>
      <input type="submit" value="ログイン">
</form>
 </body>
</html> 