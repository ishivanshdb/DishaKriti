<?php

	require_once("../session.php");

	require_once("../class.user.php");
	$auth_user = new USER();


	$user_id = $_SESSION['user_session'];

	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
  $id = $userRow['user_id'];
	if ($id == 1){

		//echo "Your are Admin";
	}

	else{
		header("location: ../member/home.php");
	}

	if(!$_SESSION['user_session']){

		header("location: ../login/denied.php");
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link rel="shortcut icon" href="../img/icon.png" type="image/png" />
<link href="../style/style1.css" rel="stylesheet" type="text/css">

<!-- Javascript goes in the document HEAD -->
<script type="text/javascript">
function altRows(id){
	if(document.getElementsByTagName){

		var table = document.getElementById(id);
		var rows = table.getElementsByTagName("tr");

		for(i = 0; i < rows.length; i++){
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}
		}
	}
}
window.onload=function(){
	altRows('alternatecolor');
}
</script>

<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.altrowstable {
	border-width: 1px;
	border-color:  #ddd;
	border-collapse: collapse;
}
table.altrowstable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #ddd;
}
table.altrowstable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #ddd;
}
.oddrowcolor{
	background-color:#fcfcfc;
}
.evenrowcolor{
	background-color:#e0dbdb;
}
</style>

<!-- Table goes in the document BODY -->



</head>

<body>



	<div id="main3">

		<div id="header"><a href="admin.php"><img src="../img/logo2.png" height="70px" width="220px"></a></div>
<center>
	<div id="manu">
	<ul>
	<li><a href="admin.php"  style="background:#1f447f; color:#fff;">HOME</a></li>
		<li><a href="user.php" >USER</a></li>
	<li><a href="product.php" >PRODUCT</a></li>
	<li><a href="order.php" >ORDER</a></li>
			<li><a href="message.php" >MESSAGES</a></li>
	<li><a href="../login/logout.php?logout=true" >SIGN OUT</a></li>
	</ul>
	</div>
</center>
<div id="content">

<h1><button class="button">Welcome <?php //echo $userRow['user_name']; ?></button></h1>

<p> In this web app admin can access rich features like below. </p>
<p>1. Add Edit Delete Products</p>
<p>2. Add Edit Delete Orders</p>
<p>3. Manage Users</p>
<p>4. Manage Messages</p>


</div>


</div>

<div id="footer3">
<center>
	<p>
		<a href="admin.php" style="color: #fff; text-decoration: none; margin: 6px">Home</a>
		<a href="product.php" style="color: #fff; text-decoration: none; margin: 6px">Product</a>
		<a href="message.php" style="color: #fff; text-decoration: none; margin: 6px">Contact Us</a>
		<a href="admin.php" style="color: #fff; text-decoration: none; margin: 6px">Services</a></p>
			<p><a href="https://www.facebook.com/AxisColleges" target="_blank" style="margin: 10px"><img src="../img/facebook.png"></a>
	  	<a href="https://www.axiscolleges.org/" target="_blank" style="margin: 10px"><img src="../img/axislog.png"></a>
		  <a href="https://www.instagram.com/axiscolleges" target="_blank" style="margin: 10px"><img src="../img/Insta.png"></a></p>
</center>
<center style="color: #fff; text-decoration: none;">
 <b>Copyrights © 2018 <em>HappDay.</em> Design by <em>HappDay Development Team</em></b>
</center>
</div>
    </div>



</body>
</html>
