<?php
    include "../public/db.php";
//  $sid=$_POST["sid"];
    $id=$_POST["id"];
//  $cname=$_POST["cname"];
    $stitle=$_POST["stitle"];
    $scon=$_POST["scon"];
    $sql="update shows set stitle='$stitle',scon='$scon' where sid=".$id;
    $db->query($sql);
    if($db->affected_rows>0){
    	echo "<script>location.href='guancon.php'</script>";
    }else{
    	echo "<script>location.href='edit.php'</script>";
    }
?>