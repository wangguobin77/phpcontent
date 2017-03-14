<?php
    include "../public/db.php";
    $id=$_GET["id"];
    $sql="select * from category where pid=".$id;
    $result=$db->query($sql);
    if($row=$result->fetch_assoc()){
        echo "<script>alert('此分类下有子分类，请删除子分类后重试');location.href='guancate.php'</script>";
    }else{
        $delsql="delete from category where cid=".$id;
        $db->query($delsql);
        if($db->affected_rows>0){
            echo "<script>alert('删除成功！');location.href='guancate.php'</script>";
        }else{
            echo "<script>alert('删除失败！');location.href='guancate.php'</script>";           
        }
    }
?>