<?php

////////////////////////////// helper.class.php
class HelperClassRandom {
	private $connection;

	function __construct() {
		$this->connection = new mysqli("localhost", "semi", "Doludizgin55", "fifa19");
		// $this->connection = new mysqli("localhost", "root", "root", "fifa");
	}

	function getPlayerRandom($set) {
		$set = preg_replace("/[^a-zA-Z]/", "", $set);
		$q = "SELECT * FROM players ORDER BY RAND() LIMIT 5";
		$results = $this->connection->query($q);
		
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

	

	function getRandomPlayerPositions($set) {
		$positions = $this->getRandomPlayerPositions($set);
		return $positions;
	}

	function getRandomPositions() {
		return ['#Random1','SUB2','SUB3', 'SUB4', 'SUB5', 'SUB6', 'SUB7', 'SUB8'];
	}
}
?>