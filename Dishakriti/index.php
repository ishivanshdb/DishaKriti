
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="shortcut icon" href="img/icon.png" type="image/png" />
<link rel="stylesheet" href="style/style1.css" type="text/css"  />
<style>
ul.pagination {
    text-align:center;
    color:#1f447f;
}
ul.pagination li {
    display:inline;
    padding:0 3px;
}
ul.pagination a {
    color:#1f447f;
    display:inline-block;
    padding:5px 10px;
    border:1px solid #1f447f;
    text-decoration:none;
}
ul.pagination a:hover,
ul.pagination a.current {
    background:#1f447f;
    color:#fff;
}



</style>

</head>
<body align="center">

<div id="main2">

    <div id="header"><a href="index.php"><img src="img/logo2.png" height="70px" width="220px"></a></div>

<div id="manu">
<ul>
<li><a style="background:#1f447f; color:#fff;" href="index.php">HOME</a></li>
<li><a href="track.php">TRACK ORDER</a></li>
<li><a href="contact.php">CONTACT</a></li>
<li><a href="login/login.php">SING IN / SIGN UP</a></li>
</ul>
</div>


<div id="content">

  <?php
  require_once 'connection/dbconfig.php';

  include_once('connection/connectionz.php');
  include_once('function/functionz.php');

  $page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
    if ($page <= 0) $page = 1;

    $per_page = 6; // Set how many records do you want to display per page.

    $startpoint = ($page * $per_page) - $per_page;

    $statement = "`product` ORDER BY `pid` ASC";


//**********************************************
$stmt = $db_con->prepare("SELECT * FROM product ORDER BY pid DESC  LIMIT {$startpoint} , {$per_page} ");
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

  $img = $row['img'];
  $pid = $row['pid'];
  $pr = $row['pr'];

  echo '
  <div class="item">
  <button class="button">Price '.$pr.' </button><br>
  <span><img src="'.$img.'"><span><br>
    <span class="more"><a href="detail.php?pid='.$pid.'" >More Detail</a></span>
     <span class="order"><a href="add-order.php?pid='.$pid.'" >Order Now</a></span>
</div>';

} // While loop End
//**********************************************
?>


<br>
<br>



    </div>
<div id="nav">
    <br>
    <center>
    <?php

            // displaying paginaiton.
            echo pagination($statement,$per_page,$page,$url='?');
            ?>
    </center>
    <br>

</div>




<div id="footer">
<center>
  <p>
    <a href="index.php" style="color: #fff; text-decoration: none; margin: 6px">Home</a>
    <a href="index.php" style="color: #fff; text-decoration: none; margin: 6px">Product</a>
    <a href="contact.php" style="color: #fff; text-decoration: none; margin: 6px">Contact Us</a>
    <a href="contact.php" style="color: #fff; text-decoration: none; margin: 6px">Services</a></p>

  <p><a href="https://www.facebook.com/AxisColleges" target="_blank" style="margin: 10px"><img src="img/facebook.png"></a>
    <a href="https://www.axiscolleges.org/" target="_blank" style="margin: 10px"><img src="img/axislog.png"></a>
    <a href="https://www.instagram.com/axiscolleges" target="_blank" style="margin: 10px"><img src="img/Insta.png"></a></p>
</center>
<center style="color: #fff; text-decoration: none;">
 <b>Copyrights © 2018 <em>HappDay.</em> Design by <em>HappDay Development Team</em></b>
</center>
</div>

</div>

</body>
</html>
