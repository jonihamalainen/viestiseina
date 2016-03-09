<?php
include ("db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $myusername=addslashes($_POST['username']);
  $mypassword=addslashes($_POST['password']);

  $sql="SELECT id FROM admin WHERE username='$myusername' and passcode='$mypassword'";
  $result=$conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc())
  {
    $_SESSION['login_user']=$myusername;
    header ("Location:adminsivu.php");
  }
}
else{
  echo "<div id='juttu'>" .
  "<h2>Hupsis, Väärää käyttäjänimi tai salasana!<br /> Yritä uudestaan!</h2>" .
  "</div>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <script src="./jquery-2.2.1.min.js"></script>
  <meta charset="utf-8">
  <title>Login</title>
</head>
<style type="text/css">
html{
  font-family: "Sans-serif", verdana;
}
h1{
  font-size: 45px;
  font-family: "Sans-serif", verdana;
  color:black;
  margin-top: 0px;
}
#wrapper{
  position:fixed;
  width: 200px;
}
#form{
  margin: auto;
  width: 200px;
  height: 100px;
  font-size: 25px;
}
#uname{
  height: 20px;
}
#pword{
  height: 20px;
}
#sisaan{
  font-family: "Sans-serif", verdana;
  margin-top: 10px;
  font-size: 20px;
  color: #ffffff;
  font-size: 16px;
  background: #3F6083;
  padding: 10px 20px 10px 20px;
  border: solid #000000 1px;
  text-decoration: none;
}
body{
  background-image: url("taustakuva.jpg");
  background-repeat: no-repeat;
  background-position: top left;
  background-attachment: fixed;
  background-size: 100vw 100vh;
}
</style>
<body>
    <div id="wrapper">
    <h1>Kirjaudu sisään</h1>
    <form id="form" action="" method="post">
      Käyttäjänimi: <input id="uname" type="text" name="username"/> <br />
      Salasana: <input id="pword" type="password" name="password"/> <br />
      <input id="sisaan" type="submit" value="Sisään"/>
    </form>
    <script>
    setTimeout(function() {
    $('#juttu').fadeOut('fast');
}, 3000); // <-- time in milliseconds
    </script>
  </body>
  </html>
