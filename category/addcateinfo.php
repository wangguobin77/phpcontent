<?php
     include "../public/db.php";
     $pid=$_POST["pid"];	
     $cname=$_POST["cname"];
//   echo "$cname";
     $sql="insert into category(cname,pid) values ('$cname','$pid')";
     $db->query($sql);
     if($db->affected_rows>0){
     	echo "<script>alert('添加成功！');location.href='addcategory.php'</script>";
     }	
	
	
	
?>