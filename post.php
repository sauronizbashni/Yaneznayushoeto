<?php
if(!empty($_POST["signin"])){
	$_SESSION['login-name']=$_POST["login"];
	$_SESSION['login-password']=md5($_POST["pass"]);
	$profile = new profile;
}
if(!empty($_POST["regme"])){
	$reg=1;
	if($_POST["pass"]==$_POST["pass2"]){
		$connect = new db;
		$connect->connectDB();
		$sql="INSERT INTO `users`(`login`, `password`, `type`) VALUES ('".$_POST["login"]."','".md5($_POST["pass"])."','student')";
		$res=$connect->dosql($sql);
		$connect->closeDB();
	}
}
if($profile->type=='admin'){
	if(!empty($_POST["adduser"])){
		users::add($_POST["login"],md5($_POST["pass"]),$_POST["type"]);
	}
	if(!empty($_POST["deluser"])){
		users::del($_POST["deluser"]);
	}
	if(!empty($_POST["addcat"])){
		cats::add($_POST["name"],$_POST["parent"]);
	}
	if(!empty($_POST["delcat"])){
		cats::del($_POST["delcat"]);
	}
	if(!empty($_POST["addlesson"])){
		$res=lessons::add($_POST,$_FILES["file"]);
		if($res) header("Location: /lessons.php");
	}
	if(!empty($_POST["dellesson"])){
		lessons::del($_POST["dellesson"]);
	}
	if(!empty($_POST["addqw"])){
		qws::add($_POST["name"],$_POST["lesson"]);
	}
	if(!empty($_POST["delqw"])){
		qws::del($_POST["delqw"]);
	}
	if(!empty($_POST["addansw"])){
		answ::add($_POST["name"],$_POST["qw"],$_POST["stat"]);
	}
	if(!empty($_POST["delansw"])){
		answ::del($_POST["delansw"]);
	}
}