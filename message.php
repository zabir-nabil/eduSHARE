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
  <button id="ssub" type="submit">Search</button>
 </div>
 <div id="hnav">
      <ul id="pul">
  <li class="pli"><a href="dashboard.php">Dashboard</a></li>
  <li class="pli"><a href="user_profile.php">Profile</a></li>
  <li class="pli"><a href="message.php">Message</a></li>
  <li class="pli"><a href="forum.php">Forum</a></li>
  <li class="pli"><a href="home.php">Logout</a></li>
</ul>
</div> 



<hr style="color:#c0d3dd;margin-top:100px;">
	 
	  <form action="msg.php" method="post">
      
        <h1>Messages</h1>
        
        <fieldset>
       
          <label for="bio">Type Message:</label>
          <textarea id="bio" name="msg"></textarea>
        </fieldset>
        <fieldset>
        
        <select id="job" name="user_job">
          <optgroup label="Friends">
            <option value="frontend_developer">Akib</option>
            <option value="php_developor">Jihan</option>
            <option value="python_developer">Zubayer</option>
            <option value="rails_developer">Maisha</option>
          </optgroup>
          <optgroup label="Co-workers">
            <option value="Android_developer">Ahsan</option>
            <option value="iOS_developer">Herman</option>
            <option value="mobile_designer">Kahn</option>
          </optgroup>
         
        </select>
        
      
        </fieldset>
        <button id="regb" type="submit">Send</button>
      </form>
    </body>
	
	<footer>
	&copy; 2017 All rights reserved.
	</footer>
	
</html>