<?php
    include "../public/db.php";
    include "../public/session.php";
    $id=$_GET["id"];
    $sql="select * from shows";
    $result=$db->query($sql);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>编辑内容</title>
</head>
<body>
	<form action="editconifon.php" method="post">
		所属内容：<select name="cid" id="">
			<?php
				include "../public/db.php";
//				$sid=$_POST["cang"];
//				$sql="select * from category where cid=".$sid;	            
				$sql="select * from category";
				
				$result=$db->query($sql);
				while($row=$result->fetch_assoc()){ 
			?>
			
			<option value="<?php echo $row['cid']?>">   <!--取cid-->
				<?php echo $row['cname']?>  <!--通过cid把数据取到前台 -->
			</option>
			<?php 
			}
			?>
		</select><br />
		标题：<input type="text" name="stitle" /><br />
		内容：<textarea name="scon" id="" cols="30" rows="10"></textarea><br />
		<input type="hidden" name="id" value="<?php echo $id?>"/>
		<input type="submit" value="更新"/>

	</form>
</body>
</html>