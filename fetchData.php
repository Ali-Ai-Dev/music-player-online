<?php
	$connect = new mysqli("localhost","root","","music_player_online") or die ("Error:".mysqli_error());
	$connect->set_charset('utf8');

	$password = urldecode($_POST['password']);
	if ($password == "passwordMusicPlayerOnline"){
		$sql_query = "SELECT * FROM music_info";
		$result = $connect->query($sql_query) or die ("Error:".mysql_error());

		$data["data"] = array();
		while ($menu = $result->fetch_assoc()){
			array_push($data["data"], $menu);
		}
		echo json_encode($data);
	}

	$connect->close();
?>