<!DOCTYPE html>
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


<?php

echo "<h1><u>Asked Questions</u></h1>";
if(!empty($_POST)){
$cat = $_POST['category'];
$qus = $_POST['question'];

//echo $cat;
//echo $qus;
$cat = trim($cat);
$qus = trim($qus);
$txt = "Category : $cat \r\n     Question : $qus \n";
//echo $txt;
$myfile = file_put_contents('forum server.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);

$forumgrab = file("forum server.txt");

}
else
{
	$forumgrab = file("forum server.txt");
}

?>

	 <div class="boxs">
	 
	 <p>
	 
	 <?php 
	 for($i=0;$i<sizeof($forumgrab);$i++)
	 echo $forumgrab[$i],"<br>";
	 
	 ?>
	 
	 </p>
	 </div>


<hr style="color:#c0d3dd;margin-top:100px;">
	 
	  <form action="forum.php" method="post">
      
        <h1>Forum</h1>
        
        <fieldset>
       
          <label for="bio">Ask a question:</label>
          <textarea id="bio" name="question"></textarea>
        </fieldset>
        <fieldset>
         <label for="bio">Category:</label>
          <textarea id="bio" name="category"></textarea>
       
        
        
      
        </fieldset>
        <button id="regb" type="submit">Ask!</button>
      </form>
    </body>
	
	<footer>
	&copy; 2017 All rights reserved.
	</footer>
	
</html>