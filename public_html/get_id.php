<?php

require_once('../private/DAO/database_api.php');
  $db = new DBConn();
        $conn = $db->connection();
        $sql = "SELECT * FROM application ORDER BY id DESC LIMIT 1 ";
        $stmt = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt[0]['conference_location']=='Egypt') {
        	if (strlen($stmt[0]['id'])==1){
        		echo "EGY00000".$stmt[0]['id'];
        	}elseif (strlen($stmt[0]['id'])==2) {
        			echo "EGY0000".$stmt[0]['id'];
        	}elseif (strlen($stmt[0]['id'])==3) {
        			echo "EGY000".$stmt[0]['id'];
        	}elseif (strlen($stmt[0]['id'])==4) {
        			echo "EGY00".$stmt[0]['id'];
        	}
        }else{
        	if (strlen($stmt[0]['id'])==1){
        		echo "MAL00000".$stmt[0]['id'];
        	}elseif (strlen($stmt[0]['id'])==2) {
        			echo "MAL0000".$stmt[0]['id'];
        	}elseif (strlen($stmt[0]['id'])==3) {
        			echo "MAL000".$stmt[0]['id'];
        	}elseif (strlen($stmt[0]['id'])==4) {
        			echo "MAL00".$stmt[0]['id'];
        	}


        }
      
?>