
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prodect Details</title>
<link rel="shortcut icon" href="img/icon.png" type="image/png" />
<link rel="stylesheet" href="style/style1.css" type="text/css"  />
</head>
<body>

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

  //**********************************************
  $pid = $_GET['pid'];

  	$stmt = $db_con->prepare("SELECT * FROM product WHERE pid = $pid");
  	$stmt->execute();
  $row=$stmt->fetch(PDO::FETCH_ASSOC);


  $img = $row['img'];
  $name =  $row['name'];
  $des = $row['des'];
   $pr = $row['pr'];
  $cdate =  $row['cdate'];


  echo '
  <div class="item1">

  <span><img src="'.$img.'"></span>

  </div>
  ';

  echo '
<div class="item1">
<button class="button2"> Price '.$pr.'</button><br>
<h2>'.$name.'</h2>
<span><b>Description </b><br>'.$des.'<span><br><br>
<b><b>Publish Date </b>'.$cdate.'</b><br>
<button class="button2"> <a href="add-order.php?pid='.$pid.'" > Order Now</a> </button>

</div>';
  //**********************************************

  ?>

</div>

</div>


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
