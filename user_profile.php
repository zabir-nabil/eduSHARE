<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>

<?php
if(!empty($_GET)){
$name = $_GET['full_name'];
//echo $name;echo '<br/>';

$mail = $_GET['email'];
//echo $mail;echo '<br/>';

$pass = $_GET['password'];
//echo $pass;echo '<br/>';

$prof = $_GET['profession'];
//echo $prof;echo '<br/>';

$univ = $_GET['university'];
//echo $univ;echo '<br/>';

$bio = $_GET['bio'];
//echo $bio;echo '<br/>';

//write to current_user file
$myfile = fopen("current_user.txt", "w") or die("Unable to open file current_user!");


fwrite($myfile, "$name\r\n");

fwrite($myfile, "$mail\r\n");

fwrite($myfile, "$pass\r\n");

fwrite($myfile, "$prof\r\n");

fwrite($myfile, "$univ\r\n");

fwrite($myfile, "$bio\r\n");

fclose($myfile);

//create a session based messaging system
    $nm2 = trim($name);
	$fn = "msg server ".$nm2.".txt";
	//echo $fn;
	if(!file_exists($fn)){
	$myfile = fopen($fn, "w") or die("Unable to create message file!");
    fclose($myfile);
	}
}
else
{
	$myfile = fopen("current_user.txt", "r") or die("Unable to open file!");
    $name = fgets($myfile);
	$mail = fgets($myfile);
	$pass = fgets($myfile);
	$prof = fgets($myfile);
	$univ = fgets($myfile);
	$bio = fgets($myfile);
	
	fclose($myfile);
	
    $nm2 = trim($name);
	$fn = "msg server ".$nm2.".txt";
	//echo $fn;
	if(!file_exists($fn)){
	$myfile = fopen($fn, "w") or die("Unable to create message file!");
    fclose($myfile);
	}

}
?>

<?php
$cn = new mysqli("127.0.0.1","root","","edushare");

if($cn)
{
	//echo 'Database connected successfully!';
}
else
{
    phpAlert('Error happened in connecting');
}
//echo '<br><br>---------------------------';





if($cn->select_db("edushare"))
{
	//echo "Selected DB<br/>";
}
else
{
	phpAlert("Couldn't select db.<br/>");
}


//echo "<br/>";






$sql2 = "INSERT INTO users(full_name,mail,pass,prof,univ,bio)
VALUES('$name','$mail','$pass','$prof','$univ','$bio')
";
//VALUES($nam,$exm,$brd,$py,$rslt)

if($cn->query($sql2))
{
	//echo "Inserted Value";
}
else
{
	phpAlert("Couldn't insert");
}



?>


<?php phpAlert( "Hi, ".$name."! Welcome to eduShare"   );  ?>


  <html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eduSHARE</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
 <div id="top">
 <span id="logo"><b>eduSHARE</b></span>
  <input id="search" type="text" name="search" placeholder="Books..">
  <button id="ssub" type="submit" onclick="location.href = 'dashboard.php';">Search</button>
 </div>
 <div id="hnav">
      <ul id="pul">
  <li class="pli"><a href="dashboard.php">Dashboard</a></li>
  <li class="pli"><a href="user_profile.php">Profile</a></li>
  <!--
  <li class="pli"><a href="message.php">Message</a></li>
  -->
  
  <li class="pli"><a href="forum.php">Forum</a></li>
 <li class="pli"><a href="home.php">Logout</a></li>
</ul>
</div> 



<hr style="color:#c0d3dd;margin-top:100px;">
	 <div>
	 <img id="propic" src="images/defaultprofilepic.png"></img>
	 </div>
	 
	 <a id="hnam" href="user_profile.php"><p style="text-align:center;"><?php echo "$name"; ?><p></a>
	 
	 <hr style="color:#c0d3dd;">
	 
	 <br>
	 <br>
	 
	 	 <div class="boxs">
	 <h3 class="bh3">Email</h3>
	 <p><?php echo "$mail";?></p>
	 </div>
	 
	 	 	 <div class="boxs">
	 <h3 class="bh3">Profession</h3>
	 <p><?php echo "$prof";?></p>
	 </div>
	 
	 <div class="boxs">
	 <h3 class="bh3">University</h3>
	 <p><?php echo "$univ";?></p>
	 </div>
	 
	 	 <div class="boxs">
	 <h3 class="bh3">Bio</h3>
	 <p><?php echo "$bio";?></p>
	 </div>
	 

	 

	 

	 
    </body>
	
	<footer>
	&copy; 2017 All rights reserved.
	</footer>
	
</html>