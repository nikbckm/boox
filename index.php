
<?php
		
		/*	Verbinden mit der Datenbank - Quelle www.php.net  und w3schools	*/
		$link = mysqli_connect("localhost", "root", "", "boox");

?>


<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	
	<style>
		table, td, th {
			padding: 10px;
		}
		body {
			padding: 10%;

		}
		}
	</style>

</head>

<body>
	<h1>Boox Datenbank</h1>
	<button type="button" class="btn btn-success">Nach Name ABC ordnen</button>
	<button type="button" class="btn btn-success">Nach ID ordnen</button>
	<table class="table table-striped">
			<th>id</th>
			<th>name</th>
			<th>mail</th>
			<th>password</th>
				<?php
					$stmt = "SELECT * FROM `user` ORDER BY name ASC";
					$result = $link->query($stmt);

					while ($row = mysqli_fetch_row($result)){
						echo "<tr>\n";
						echo "<td>" . $row[0] . "</td>\n";
						echo "<td>" . $row[1] . "</td>\n";
						echo "<td>" . $row[2] . "</td>\n";
						echo "<td>" . $row[3] . "</td>\n";
						echo "<tr>\n";
					}
				?>	
	</table>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
</body>

</script>