<?php 
class Model_Main extends Model
{
	public function send_main()
	{	
		global $mysqli;
		$data = array();
			$sql = "SELECT * FROM `applicationuser`";
			$result = $mysqli->query($sql);
			while($row = mysqli_fetch_array($result)) {
			    $data[] = $row;
			}
			return $data;
	}
	public function send_new()
	{	
		global $mysqli;
		$data = array();
			$sql = "SELECT * FROM `applicationuser` WHERE `status` = 'new'";
			$result = $mysqli->query($sql);
			while($row = mysqli_fetch_array($result)) {
			    $data[] = $row;
			}
			return $data;
	}
	public function send_resh()
	{	
		global $mysqli;
		$data = array();
			$sql = "SELECT * FROM `applicationuser` WHERE `status` = 'resh'";
			$result = $mysqli->query($sql);
			while($row = mysqli_fetch_array($result)) {
			    $data[] = $row;
			}
			return $data;
	}
	public function send_otkl()
	{	
		global $mysqli;
		$data = array();
			$sql = "SELECT * FROM `applicationuser` WHERE `status` = 'otkl'";
			$result = $mysqli->query($sql);
			while($row = mysqli_fetch_array($result)) {
			    $data[] = $row;
			}
			return $data;
	}
	public function send_search()
	{	
		global $mysqli;
		$data = array();
			$comment = $_POST['search'];
			$sql = "SELECT * FROM `applicationuser` WHERE `comments` = '$comment'";
			$result = $mysqli->query($sql);
			while($row = mysqli_fetch_array($result)) {
			    $data[] = $row;
			}
			return $data;
	}
}

?>