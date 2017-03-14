<?php
    include "../public/db.php";
    $id=$_GET["id"];
    $sql="delete from shows where sid=".$id;
    $result=$db->query($sql);
    if($db->affected_rows>0){
        echo "<script>alert('删除成功！');location.href='guancon.php'</script>";
    }else{
        echo "<script>alert('删除失败！');location.href='guancon.php'</script>";           
    }
?>