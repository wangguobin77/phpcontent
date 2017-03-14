<?php
    include "../public/db.php";
    include "../public/session.php";
    $id=$_GET["id"];
    $sql="select * from category";
    $result=$db->query($sql);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>编辑分类</title>
</head>
<body>
	<form action="editcateinfo.php" method="post">
		上级分类：<select name="pid" id="">
					<option value="0">一级分类
					<?php
						include "../public/db.php";
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
					</option>	
				</select><br />
		分类名称：<input type="text" name="cname" /><br />
		<input type="hidden" name="cid" value="<?php echo $id?>"/>
		<input type="submit" value="更新"/>

	</form>
</body>
</html>