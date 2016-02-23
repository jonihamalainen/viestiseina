<html>
<head>
<title>Viestiseinä</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">
</head>
<?php
require_once('db.php');

$sql = "SELECT lahettaja, viesti FROM viestiseina";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div id='viesti'>";
        echo $row["lahettaja"] . "sanoo:" . "<br>" . $row["viesti"] . "<br>";
    }
    echo "</div>";
} else {
    echo "0 results";
}
$conn->close();
 ?>
</html>
