
<?php

	$conn = mysql_connect("localhost","root","wjdqhqhdks");
	mysql_select_db("whoru",$conn);

	$email = $_POST["email"];
	$passwd = $_POST["passwd"];
	$name = $_POST["name"];
	$nickname = $_POST["nickname"];
	$dept = $_POST["dept"];
	$userip = $_SERVER['REMOTE_ADDR'];
	$reg_date = date(Ymd);
	$query = "insert into imsi(email,passwd,name,nickname,dept,userip,reg_date)
	 values('$email','$passwd','$name','$nickname','$dept','$userip',$reg_date)";
	
	mysql_query($query, $conn);
	mysql_close($conn);
?>

<!--s
create table imsi(
    uid int auto_increment primary key,
    email varchar(50) not null,
    passwd varchar(100) not null,
    name varchar(20) not null,
    nickname varchar(20) not null,
    dept varchar(50) not null,
    userip varchar(20) not null,
    reg_date date not null
);
-->