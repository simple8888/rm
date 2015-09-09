<?php
      //include('common.php'); 
      require('mysqli.inc.php');

      $mysqli->query("DELETE FROM yuangong WHERE yuangongID=$_GET[ygID]");
      $mysqli->query("DELETE FROM kaoqin WHERE ygongID=$_GET[ygID]");
      $mysqli->query("DELETE FROM shebao WHERE ygongID=$_GET[ygID]");
      $mysqli->query("DELETE FROM chanliang WHERE ygongID=$_GET[ygID]");
      $mysqli->query("DELETE FROM zhiliang WHERE ygongID=$_GET[ygID]");
	
      echo"<span>*</span>";
      echo $mysqli->affected_rows.'条记录被删除';
      echo"<span>*</span>";
      $mysqli->close();
      include('renliziyuan.php'); 
?>