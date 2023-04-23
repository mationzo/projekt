<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<style>
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  width: 200px;
		  background-color: #f1f1f1;
		  position: fixed;
		  height: 100%;
		  overflow: auto;
          padding-left: 0px;

		}

		li a {
		  display: block;
		  color: #000;
		  padding: 8px 16px;
		  text-decoration: none;
		}

		li a.active {
		  background-color: #4CAF50;
		  color: white;
		}

		li a:hover:not(.active) {
		  background-color: #555;
		  color: white;
		}
		.menu {
			float: left;
		}

		.t {
			
			margin-left: 300px;
		}
		table, tr, td{
			border: 1.5px solid;
		}

	</style>
</head>
<body>
<div class="menu">	
<ul>
		<li><a class="active" href="menu.php">Menu</a></li>
		<li><a href="faktura_vat.php">faktura_vat</a></li>
		<li><a href="imiona.php">imiona</a></li>
		<li><a href="klient.php">klient</a></li>
		<li><a href="#">kod pocztowy</a></li>
		<li><a href="#">miasto</a></li>
		<li><a href="#">nazwiska</a></li>
		<li><a href="#">nazwy firm</a></li>
		<li><a href="#">nazwy towarów</a></li>
		<li><a href="#">pozycja faktury</a></li>
		<li><a href="#">rodzaje towaru</a></li>
		<li><a href="#">towar</a></li>
		<li><a href="#">ulice</a></li>
		<li><a href="#">vat</a></li>
		
	</ul>
	</div>
	
        <?php
$do_bazy = new mysqli('localhost', 'root', '', 'hurt_ele_ms');
mysqli_set_charset($do_bazy, "utf8");
if (mysqli_connect_errno()) {
  echo "Nie moge polaczyc sie z serwerem MySQL. Kod błędu:" . mysqli_connect_error();
  exit;
}

if ($result = mysqli_query($do_bazy, 'SELECT * FROM faktura_vat')) {
  echo "<div class='t'>";
  echo "<table>";
  echo "<tr><th>ID</th><th>ID klienta</th><th>Data faktury</th><th>Numer faktury</th></tr></div>";

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row['ID_Fakt_vat'] . "</td><td>" . $row['ID_Kl'] . "</td><td>" . $row['Data_faktury'] . "</td><td>" . $row['Numer_faktury'] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "Brak danych do wyświetlenia";
}
mysqli_close($do_bazy);
?>  


</body>
</html>
