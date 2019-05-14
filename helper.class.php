<?php

////////////////////////////// helper.class.php
class HelperClass {
	private $connection;

	function __construct() {
		$this->connection = new mysqli($servername, $username, $password, $dbname);
	}

	function getPlayerPositions() {
		$results = $this->connection->query("SELECT * FROM players WHERE Position LIKE '%CB%' ORDER BY RAND() LIMIT 5");

		if ($results->num_rows > 0) {
			// output data of each row
			while($row = $results->fetch_assoc()) {
				$res[] = "Name:".$row["Name"]. "Rank:". $row["Overall"]. "Age:" . $row["Age"] . "<br>";
			}
		} else {
			$res[] = "0 results";
		}
	}
}