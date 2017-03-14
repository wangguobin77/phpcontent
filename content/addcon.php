
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>添加内容</title>
</head>
<body>
	所属内容：<form action="addconifon.php" method="post">
		<select name="cid" id="">
			<option value="0">一级标题
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
		</select>
		<br />
		标题：<input type="text" name="stitle"/><br />
		内容：<textarea name="scon" id="" cols="30" rows="10"></textarea><br />
		<!--<input type="hidden" value="<?php echo $id?>" name="sid"/>-->
		<input type="submit" value="提交"/>
	</form>
</body>
</html>