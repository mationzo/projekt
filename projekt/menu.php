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
	</style>
</head>
<body>
	<ul>
		<li><a class="active" href="#">Menu</a></li>
		<li><a href="faktura_vat.php">faktura_vat</a></li>
		<li><a href="imiona.php">imiona</a></li>
		<li><a href="klient.php">klient</a></li>
		<li><a href="kod pocztowy.php">kod pocztowy</a></li>
		<li><a href="miasto.php">miasto</a></li>
		<li><a href="nazwiska.php">nazwiska</a></li>
		<li><a href="nazwy firm.php">nazwy firm</a></li>
		<li><a href="nazwy towarow.php">nazwy towarów</a></li>
		<li><a href="pozycja faktury.php">pozycja faktury</a></li>
		<li><a href="rodzaje towaru.php">rodzaje towaru</a></li>
		<li><a href="towar.php">towar</a></li>
		<li><a href="ulice.php">ulice</a></li>
		<li><a href="vat.php">vat</a></li>
	</ul>
		
        


</body>
</html>
