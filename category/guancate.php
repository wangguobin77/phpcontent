<?php
    include "../public/db.php";
    include "../public/session.php";
    $sql="select * from category";
    $result=$db->query($sql);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>管理分类</title>
</head>
<style>
	table{
		height: auto;
		width: 600px;
		border: 1px solid #000;
		margin: 0 auto;
		border-collapse: collapse;
		
	}
	tr,td{
		line-height: 30px;
		height: 30px;
		width: 25%;
		margin: auto;
		text-align: center;
		border: 1px solid #000;
	}
</style>
<body>
	<table>
		<thead>
			<tr>
				<td>分类id</td>
				<td>分类名称</td>
				<td>分类</td>
				<td>操作</td>
			</tr>
		</thead>
		<tbody>
			<?php
			while($row=$result->fetch_assoc()){?>	
				<tr>
					<td><?php echo $row["cid"]?></td>
					<td><?php echo $row["cname"]?></td>
					<td><?php echo $row["pid"]?></td>
					<td><a href="del.php?id=<?php echo $row['cid']?>">删除</a><a href="editcate.php?id=<?php echo $row['cid']?>">编辑</a></td>
				</tr>
			<?php }?>
		</tbody>
	</table>
</body>
</html>