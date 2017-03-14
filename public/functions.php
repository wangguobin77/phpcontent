<?php
class abc{
	function abc(){
		$this->str='';
	}
	function tree($pid,$flag,$db,$flag){
		$sql="select * from $table where pid=".$pid;
		$result=$db->query($sql);
		while($row=$result->fetch_assoc()){
			$cid=$row["cid"];
			$str="<option value=$cid>{$row['cname']}</option>";
			$flag.=$flag;
			tree($row["cid"],$flag,$db,$table);
		}
	}
}


//有问题






?>