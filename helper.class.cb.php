<?php
class HelperClass {
	private $connection;

	function __construct() {
		$this->connection = new mysqli("localhost", "semi", "Doludizgin55", "fifa19");
		// $this->connection = new mysqli("localhost", "root", "root", "fifa");
	}

	function getPlayerPositions($set) {
		$set = strtolower(preg_replace("/[^a-zA-Z]/", "", $set));

		if($set != "sub"){
			$q = "SELECT * FROM players WHERE Position LIKE '".$set."' ORDER BY RAND() LIMIT 5";
		} else {
			$q = "SELECT * FROM players ORDER BY RAND() LIMIT 5";
		}
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

	

	function getShuffledPlayerPositions($set) {
		$positions = $this->getPlayerPositions($set);
		return $positions;
	}

	function getPositions() {
		return ['CB1','CB2','CB3', 'GK1', 'CM1', 'CM2', 'CM3', 'CM4', 'LM1' ,'CAM1' ,'RM1', 'ST1','ST2', 'LW1', 'RW1', 'LB1', 'RB1', 'CDM1'];
	}

	function getSubPositions() {
		return ['sub1','sub2','sub3', 'sub4', 'sub5', 'sub6', 'sub7', 'sub8'];
	}
}
?>