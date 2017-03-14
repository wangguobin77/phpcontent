<?php
    session_start();       //开启
    if(!isset($_SESSION["is_login"])){       
	 	echo "<script>location.href='login.php'</script>";
	}	
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>内容管理系统</title>
	<script src="../public/jquery.min.js"></script>
</head>
<style>
	/**{
		box-sizing: border-box;
	}*/
	.box{
		height: 500px;
		width: 1000px;
		border: 1px solid #000;
		margin: 0 auto;
	}
	.header{
		height: 100px;
		line-height: 100px;
		text-align: center;
		font-size: 26px;
		color: #999;
	}
	.main{
		border-top: 1px solid #000;
	}
	.left{
		border-right: 1px solid #000;
		width: 300px;
		height: 400px;
		float: left;
	}
	.right{
		float: left;
		width: 699px;
		height: 400px;
	}
	.opt{
		cursor: pointer;
	}
	.son li{
		cursor: pointer;
	}
	iframe{
		border: 0px;
		width: 100%;
		height:100%;
	}
</style>
<body>
	<div class="box">
		<div class="header">
			欢迎进入内容管理系统！
			<a href="exit.php">退出</a>
		</div>
		<div class="main">
			<div class="left">
				<ul class="meun">
					<li class="opt">用户管理
					    <ul class="son">
					    	<li><a href="" target="right">添加用户</a></li>
					    	<li><a href="" target="right">管理用户</a></li>
					    </ul>
					</li>
					<li class="opt">分类管理
					    <ul class="son">
					    	<li><a href="../category/addcategory.php" target="right">添加分类</a></li>
					    	<li><a href="../category/guancate.php" target="right">管理分类</a></li>
					    </ul>
					</li>
					<li class="opt">内容管理
					    <ul class="son">
					    	<li><a href="../content/addcon.php" target="right">添加内容</a></li>
					    	<li><a href="../content/guancon.php" target="right">管理内容</a></li>
					    </ul>
					</li>
				</ul>
			</div>
			<div class="right">
				<iframe src="" name="right" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</body>
<script>
        $(function(){
            $(".opt").click(function(){
                $(this).find(".son").toggle(100);    
            })
        })
        $(".son").find("a").click(function(e){
        	e.stopPropagation();
        })
       
</script>
</html>