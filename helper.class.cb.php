<?php

////////////////////////////// helper.class.php
class HelperClass {
	private $connection;

	function __construct() {
		$this->connection = new mysqli("localhost", "semi", "Doludizgin55", "fifa19");
	}

	function getPlayerPositions() {
		$results = $this->connection->query("SELECT * FROM players WHERE Position LIKE '%CB%' ORDER BY RAND() LIMIT 5");
		
		if ($results->num_rows > 0) {
			// output data of each row
			while($row = $results->fetch_assoc()) {
				$res[] = $row;
			}
		} else {
			$res[] = "0 results";
		}

		return $res;
	}
}
?>