<?php
    include "../public/db.php";
    include "../public/session.php";
    $sql="select * from shows";
    $result=$db->query($sql);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>添加内容</title>
</head>
<style>
	table{
		height: auto;
		width: 600px;
		border: 1px solid #000;
		border-collapse: collapse;
		margin: 0 auto;
	}
	tr,td{
		height: 30px;
		line-height: 30px;
		text-align: center;
		border: 1px solid #000;
	}
</style>
<body>
	<table>
		<thead>
			<tr>
				<td>所属分类</td>
				<td>内容id</td>
				<td>标题</td>
				<td>内容</td>
				<td>时间</td>
				<td>操作</td>
			</tr>
		</thead>
		<tbody>
			<?php
				while($row=$result->fetch_assoc()){	?>
				<tr>
					<td><?php echo $row["cid"]?></td>
					<td><?php echo $row["sid"]?></td>
					<td><?php echo $row["stitle"]?></td>
					<td><?php echo $row["scon"]?></td>
					<td><?php echo $row["stime"]?></td>
					<td><a href="del.php?id=<?php echo $row['sid']?>">删除</a><a href="edit.php?id=<?php echo $row['sid']?>">编辑</a></td>
					<input type="hidden" name="cang" value="<?php echo $row["cid"]?>" />
				</tr>	
					
			<?php
			}
			?>		

		</tbody>
	</table>
</body>
</html>