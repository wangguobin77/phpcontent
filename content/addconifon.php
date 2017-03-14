<?php
   include "../public/db.php";
   include "../public/session.php";
   $cid=$_POST["cid"];
// $sid=$_POST["sid"];
   $stitle=$_POST["stitle"];
   $scon=$_POST["scon"];
   $usename=$_SESSION["usename"];
   $sql="insert into shows (stitle,scon,cid,usename) values('$stitle','$scon','$cid','$usename')";
   $db->query($sql);
   if($db->affected_rows>0){
   	echo "<script>alert('添加成功！');location.href='addcon.php'</script>";
// 	exit;
   }else{
   	echo "<script>alert('添加失败！');location.href='addcon.php'</script>";
   }
?>