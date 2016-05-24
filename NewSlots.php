<?php
	include("DBConnection.php");
	class NewSlots {
		public function getAllSlots() {
			$dbConnection = new DBConnection();
			$conn = $dbConnection->getDBConnection();
			$sql = "SELECT id, day, timeSlot FROM " . TABLE_AVAILABLE_APPOINTMENTS;
			$result = $conn->query($sql);
			$timeSlots = array();
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					if(!empty($row["timeSlot"])) {
						$timeSlot = explode(";", $row["timeSlot"]);
						$timeSlots[$row["day"]] = $timeSlot;
					} else {
						$timeSlots[$row["day"]] = array();
					}
				}
			} else {
				echo "0 results";
				//log no results from db;
			}
			$dbConnection->closeDBConnection($conn);
			return $timeSlots;
		}
		
		public function saveNewSlots($slots) {
			$dbConnection = new DBConnection();
			$db = $dbConnection->getDBConnection();
			//$dbConnection->printArr($slots);die;
			try {
				// First of all, let's begin a transaction
				$db->begin_transaction();
				// A set of queries; if one fails, an exception should be thrown
				foreach($slots as $k => $v) {
					// save slots for each day.
					$query = "UPDATE " . TABLE_AVAILABLE_APPOINTMENTS . " SET timeSlot='" . $v . "' WHERE day='" . $k . "'";
					$db->query($query);
				}
				// If we arrive here, it means that no exception was thrown
				// i.e. no query has failed, and we can commit the transaction
				$db->commit();
				$dbConnection->closeDBConnection($db);
			} catch (Exception $e) {
				// An exception has been thrown
				// We must rollback the transaction
				$db->rollback();
				return false;
			}
			return true;
		}
	}
?>