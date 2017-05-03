<!DOCTYPE html>
  <html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edushare</title>
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/slider_support.css">
    </head>
    <body>
 <div id="top">
 <span id="logo"><b>Edushare</b></span>
  <input id="search" type="text" name="search" placeholder="Books..">
  <button id="ssub" type="submit">Search</button>
 </div>
 <div id="hnav">
      <ul id="pul">
  <li class="pli"><a href="login.php">Login</a></li>
  <li class="pli"><a href="register.php">Register</a></li>
 </ul>
</div> 

<div id="slideshow" style="margin-top:50px;background-image:url('images/bop4.jpg');">
 <div class="w3-content w3-section" style="max-width:700px;border:3px solid grey;border-radius:5px;padding:5px;">
  <p style="text-align:center;padding:5px;color:white;">This is an education based networking website project implented for CSE 3100 Internet Programming Lab. By - Roll: 1409016</p>

  <img class="mySlides w3-animate-fading" src="images/slider1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/slider2.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/slider3.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/slider4.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/slider5.jpg" style="width:100%">
</div>
</div>
<hr style="color:#c0d3dd;">
	 
	 
	 <a id="hnam" href="devprofile.php"><p style="text-align:center;">Developer: Zabir Al Nazi Nabil<p></a>
	 
	 <hr style="color:#c0d3dd;">
	 
	 <br>
	 <br>
	 <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);    
}
</script>

	
    </body>
	
	<footer>
	&copy; 2017 All rights reserved.
	</footer>
	
</html>