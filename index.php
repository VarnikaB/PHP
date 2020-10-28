<h1>Hello</h1>
<?php
	echo "<pre>\n";
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=misc','Varnika','zap');
	$stmt = $pdo->query("SELECT * FROM users");
	echo '<table border = "4">';
	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		echo "<tr><td>";
		echo ($row['name']) ,"</td><td>";
		echo ($row['email']) ,"</td><td>";
		echo ($row['password']), "</td></tr>";
	}
	echo "</table>";
	echo "</pre>\n";
?>