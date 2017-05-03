<!DOCTYPE html>
  <html>
  <head>
  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eduSHARE</title>
        <link rel="stylesheet" href="css/main.css">
    
	</head>
    <body>
	
 <div id="top" style="height:60px;">
 <span id="logo"><b>eduSHARE</b></span>
  <input id="search" type="text" name="search" placeholder="Books..">
  <button id="ssub" type="submit">Search</button>
 </div>
 
 
      <form action="user_profile.php" method="get">

        <h1>Join eduSHARE</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="full_name">
          
          <label for="mail">Email:</label>
          <input type="text" id="mail" name="email">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password">
          
          <label>Your profession:</label>
          <input type="radio" id="student" value="Student" name="profession"><label for="student" class="light">Student</label><br>
          <input type="radio" id="teacher" value="Teacher" name="profession"><label for="teacher" class="light">Teacher</label>
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Profile information</legend>
		            <label for="univ">University:</label>
          <input type="text" id="univ" name="university">
          
          <label for="bio">Biography:</label>
          <textarea id="bio" name="bio"></textarea>
        </fieldset>
		<!-- Didn't updated this part
        <fieldset>
        <label for="job">Your field:</label>
        <select id="job" name="user_job">
          <optgroup label="Electrical Engineering">
            <option value="frontend_developer">Simulation</option>
            <option value="php_developor">Circuit Theory</option>
            <option value="python_developer">Proteus</option>
            <option value="rails_developer">AVR</option>
          </optgroup>
          <optgroup label="Electronics and Communication">
            <option value="Android_developer">Semiconductor technology</option>
            <option value="iOS_developer">Radar communication</option>
            <option value="mobile_designer">Microwave</option>
          </optgroup>
          <optgroup label="Business">
            <option value="business_owner">Accounting</option>
            <option value="freelancer">Economics</option>
          </optgroup>
          <optgroup label="Others">
            <option value="secretary">Mathematics</option>
            <option value="maintenance">Physics</option>
          </optgroup>
        </select>
        Didn't updated this part-->
		<!--
          <label>Interests:</label>
          <input type="checkbox" id="programming" value="programming" name="interest[]"><label class="light" for="programming">Programming</label><br>
            <input type="checkbox" id="embedded_system" value="embedded_system" name="interest[]"><label class="light" for="embedded_system">Embedded System</label><br>
          <input type="checkbox" id="microprocessor" value="microprocessor" name="interest[]"><label class="light" for="microprocessor">Microprocessor</label>
        -->
        </fieldset>
        <input id="regb" type="submit" name="submit" value="Register"></button>
      </form>
      
    </body>
	
	<footer>
	&copy; 2017 All rights reserved.
	</footer>
	
</html>