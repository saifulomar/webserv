

<?php
	// Include confi.php
	
	include_once('confi.php');
	
	$pid = isset($_GET['pid']) ? mysql_real_escape_string($_GET['pid']) :  "";

	 
	if(!empty($pid)){
		$qur = mysql_query("SELECT NotificationId, Title, Description, ProgrammeId, Expire FROM notification WHERE ProgrammeId ='$pid'");
		$result =array();
		while($r = mysql_fetch_array($qur)){
			extract($r);
			$result[] = array("Title" => $Title, "Description" => $Description,"ProgrammeId" => $ProgrammeId); 

		}
		
		//var_dump($result);

		$json = array("ITBNotification" => 1, "info" => $result);
	}else{
		$json = array("ITBNotification" => 0, "msg" => "ProgrammeId not define");
	}
	@mysql_close($conn);
	
	//var_dump($json);

	/* Output header*/ 
	header('Content-type: application/json');
	echo json_encode($json);
	//echo $jsone;
	

?>

