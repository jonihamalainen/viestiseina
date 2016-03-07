<html>
<head>
  <meta charset="utf-8"/>
<title>Viestiseinä</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">
</head>
<body>
  <form action="lisaaViesti.php" method="get">
    <input type="text" name="lahettaja" placeholder="Nimesi"/> <br>
    <input id="form" type="text" pattern="^[a-zA-Z0-9,!,?,,,.,-, ,]+$" maxlength="99"  name="viesti" placeholder="Kirjoita viestisi tähän..."/>
    <input type="submit"/>

<?php
require_once('db.php');

$sql = "SELECT lahettaja, viesti, aika FROM viestiseina  ORDER BY id DESC"; //WHERE julkinen=1
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div id='viesti'>".
       '<p class="lahettaja">'.$row["lahettaja"].'</p>'.
       '<p class="viesti">'.$row["viesti"].'</p>'.
       '<p class="aika">'.$row["aika"].'</p>'.
       "</div>";
     }
}else{
  echo "Ei viestejä!!";
}
$conn->close();
 ?>
 </body>
</html>
