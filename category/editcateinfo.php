<?php
    include "../public/db.php";
    $cid=$_POST["cid"];
    $cname=$_POST["cname"];
    $pid=$_POST["pid"];
    $sql="update category set cname='$cname',pid='$pid' where cid=".$cid;
    $db->query($sql);
    if($db->affected_rows>0){
    	echo "<script>location.href='guancate.php'</script>";
    }else{
    	echo "<script>location.href='edit.php'</script>";
    }
?>