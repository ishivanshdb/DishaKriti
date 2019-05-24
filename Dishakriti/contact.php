
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
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
  <li><a  href="index.php">HOME</a></li>
  <li><a href="track.php">TRACK ORDER</a></li>
  <li><a style="background:#1f447f; color:#fff;" href="contact.php">CONTACT</a></li>
  <li><a href="login/login.php">SING IN / SIGN UP</a></li>
  </ul>
  </div>


  <div id="content">

  <center>
    <form  method="post" action="contact.php" >

     <h1 >Contact Us</h1>


     <input type="text"  name="name" placeholder="Name" required /><br><br>
     <input type="text"  name="email" placeholder="Email" required /><br><br>
     <input type="text"  name="mobile" placeholder="Mobile" required /><br><br>
     <textarea type="text"  name="message" placeholder="Message" required /></textarea><br>

  <br>

         <button  type="submit"  class="button"> SEND </button>



   </form>

 <br><br>

<?php
 require_once 'connection/dbconfig.php';


 	if(isset($_POST['ccontact'])){


 		$name = $_POST['name'];
 		$mb = $_POST['mobile'];
 		$em = $_POST['email'];
 		$mssg = $_POST['mssg'];
 		$cdate = date('Y-m-d');

 		try{

 			$stmt = $db_con->prepare("INSERT INTO message(name, mobile, email, mssg,cdate)
 			VALUES(:nm, :mb, :em, :sms,:cd)");

 			$stmt->bindParam(":nm", $name);
 			$stmt->bindParam(":mb", $mb);
 			$stmt->bindParam(":em", $em);
 			$stmt->bindParam(":sms", $mssg);
 			$stmt->bindParam(":cd", $cdate);


 			if($stmt->execute())
 			{
 				echo '<b><font color="green">Congratulation! <br>Your Message submitted Successfully. Admin will contact you shortly.</font></b>';

 			}
 			else{
 				echo "Query Problem";
 			}
 		}
 		catch(PDOException $e){
 			echo $e->getMessage();
 		}
 	}





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
