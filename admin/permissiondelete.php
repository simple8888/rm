<?php
      //include('common.php'); 
      require('mysqli.inc.php');

      $mysqli->query("DELETE FROM permission WHERE permissionid=$_GET[pmid]");
	
      echo"<span>*</span>";
      echo $mysqli->affected_rows.'条记录被删除';
      echo"<span>*</span>";
      $mysqli->close();
      include('permission.php'); 
?>