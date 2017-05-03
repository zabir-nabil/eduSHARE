<?php
$s1 = 35;//$_GET['s1']; //C
$s2 = 25;//$_GET['s2']; //d3
$s3 = 40;//$_GET['s3']; //C++

if(!empty($_GET))
{
	$s1 = $_GET['s1'];
    $s2 = $_GET['s2'];
    $s3 = $_GET['s3'];
	
}

?>
<!DOCTYPE html>
  <html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eduSHARE</title>
        <link rel="stylesheet" href="css/main.css">


		    <script type="text/javascript" src="d3.v2.js"></script>

    <style type="text/css">
        .slice text {
            font-size: 16pt;
            font-family: Arial;
        }   
    </style>
	
	
		
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
  <li class="pli"><a href="devprofile.php">Profile</a></li>
  <li class="pli"><a href="devprofile.php">About Me</a></li>
</ul>
</div> 

<div id="skillbar" style="">
<h1 style="margin-left:30px;"><u>Skillset</u></h3>
<script type="text/javascript">

	var s1 = <?php echo $s1; ?>;
	var s2 = <?php echo $s2; ?>;
	var s3 = <?php echo $s3; ?>;
	
	//alert(s1+" "+s2+" "+s3);
	
	
    var w = 1000,                        //width
    h = 300,                            //height
    r = 100,                            //radius
    color = d3.scale.category20c();     //builtin range of colors
    rprimex = r+590;
	rprimey = r+30;
    data = [{"label":"C", "value":s1}, 
            {"label":"d3", "value":s2}, 
            {"label":"C++", "value":s3}];
    
    var vis = d3.select("body")
        .append("svg:svg")              //create the SVG element inside the <body>
        .data([data])                   //associate our data with the document
            .attr("width", w)           //set the width and height of our visualization (these will be attributes of the <svg> tag
            .attr("height", h)
        .append("svg:g")                //make a group to hold our pie chart
            .attr("transform", "translate(" + rprimex + "," + rprimey + ")")    //move the center of the pie chart from 0, 0 to radius, radius

    var arc = d3.svg.arc()              //this will create <path> elements for us using arc data
        .outerRadius(r);

    var pie = d3.layout.pie()           //this will create arc data for us given a list of values
        .value(function(d) { return d.value; });    //we must tell it out to access the value of each element in our data array

    var arcs = vis.selectAll("g.slice")     //this selects all <g> elements with class slice (there aren't any yet)
        .data(pie)                          //associate the generated pie data (an array of arcs, each having startAngle, endAngle and value properties) 
        .enter()                            //this will create <g> elements for every "extra" data element that should be associated with a selection. The result is creating a <g> for every object in the data array
            .append("svg:g")                //create a group to hold each slice (we will have a <path> and a <text> element associated with each slice)
                .attr("class", "slice");    //allow us to style things in the slices (like text)

        arcs.append("svg:path")
                .attr("fill", function(d, i) { return color(i); } ) //set the color for each slice to be chosen from the color function defined above
                .attr("d", arc);                                    //this creates the actual SVG path using the associated data (pie) with the arc drawing function

        arcs.append("svg:text")                                     //add a label to each slice
                .attr("transform", function(d) {                    //set the label's origin to the center of the arc
                //we have to make sure to set these before calling arc.centroid
                d.innerRadius = 0;
                d.outerRadius = r;
                return "translate(" + arc.centroid(d) + ")";        //this gives us a pair of coordinates like [50, 50]
            })
            .attr("text-anchor", "middle")                          //center the text on it's origin
            .text(function(d, i) { return data[i].label; });        //get the label from our original data array
        
    </script>
	
</div>

<hr style="color:#c0d3dd;margin-top:0px;">
	 <div>
	 <img id="propic" src="images/profilepic.jpg"></img>
	 </div>
	 
	 <a id="hnam" href="devprofile.php"><p style="text-align:center;">Zabir Al Nazi Nabil<p></a>
	 
	 <hr style="color:#c0d3dd;">
	 
	 <br>
	 <br>
	 
	 <div class="boxs">
	 <h3 class="bh3">University</h3>
	 <p>Khulna University of Engineering and Technology</p>
	 </div>
	 
	  <div class="boxs">
	 <h3 class="bh3">Field</h3>
	 <p>Electronics and Communication Engineering</p>
	 </div>
	 
	 	 <div class="boxs">
	 <h3 class="bh3">Interests</h3>
	 <p>Programming, Embedded Systems</p>
	 </div>
	 
	 	 	 <div class="boxs">
	 <h3 class="bh3">Skills</h3>
	 <p>C, d3, C++</p>
	 </div>
	 
    </body>
	
	<footer>
	&copy; 2017 All rights reserved.
	</footer>
	
</html>