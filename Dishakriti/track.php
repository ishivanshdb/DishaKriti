
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Track Order</title>
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
  <li><a href="index.php">HOME</a></li>
  <li><a style="background:#1f447f; color:#fff;" href="track.php">TRACK ORDER</a></li>
  <li><a href="contact.php">CONTACT</a></li>
  <li><a href="login/login.php">SING IN / SIGN UP</a></li>
  </ul>
  </div>


  <div id="content">

  <center>
    <form method='post'  action="track.php">

     <table >

     <tr>
         <td colspan="2">	<h1>Track Your Order </h1></td>
     </tr>


     <tr>
         <td>Order No</td>
         <td><input type='text' name='search'   placeholder='' required /></td>
     </tr>

     <tr>
        <td></td><td>
      <button type="submit" class="button" >
  TRACK
    </button>
          </td>
      </tr>

  </table>
  </form>

  </center>
  <br><br>

  <?php
  require_once 'connection/dbconfig.php';


  //**********************************************
  require_once 'connection/dbconfig.php';

  if(isset($_GET['myid'])){

  $myid = $_GET['myid'];

  $stmt = $db_con->prepare("SELECT * FROM ordrs WHERE myid = $myid");
  $stmt->execute();
  $row=$stmt->fetch(PDO::FETCH_ASSOC);


  $img = $row['img'];
  $name =  $row['name'];
  $ordr = $row['ordr'];
  $pr = $row['pr'];
  $cdate =  $row['cdate'];
  $sts = $row['sts'];


  echo '
  <div class="item1">

  <span><img src="'.$img.'"><span>

  </div>
  ';

  echo '
  <div class="item1">
  <button class="button"> Price '.$pr.'</button><br>
  <span><b>Order No</b><br>'.$myid.'<span><br>
  <span><b>Name</b><br>'.$name.'<span><br>
  <span><b>Order</b><br>'.$ordr.'<span><br>
  <b><b>Order Date </b>'.$cdate.'</b><br>
  <button class="button"> '.$sts.' </button>
  </div>

  ';



  }

  if(isset($_POST['search'])){


  $myid = $_POST['search'];


  $stmt = $db_con->prepare("SELECT * FROM ordrs WHERE myid = $myid");
  $stmt->execute();
  $row=$stmt->fetch(PDO::FETCH_ASSOC);


  $img = $row['img'];
  $name =  $row['name'];
  $ordr = $row['ordr'];
  $pr = $row['pr'];
  $cdate =  $row['cdate'];
  $sts = $row['sts'];


  echo '
  <div class="item1">

  <span><img src="'.$img.'"><span>

  </div>
  ';

  echo '
  <div class="item1">
  <button class="button"> Price '.$pr.'</button><br>
  <span><b>Course No</b><br>'.$myid.'<span><br>
  <span><b>Name</b><br>'.$name.'<span><br>
  <span><b>Course</b><br>'.$ordr.'<span><br>
  <b><b>Order Date </b>'.$cdate.'</b><br>
  <button class="button"> '.$sts.' </button>
  </div>

  ';



  }









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
