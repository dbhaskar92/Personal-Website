<html>

<!--

Author: Dhananjay Bhaskar
Created: May, 2014

-->

<?php
	$msie = strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE') ? true : false;
	$firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
	$safari = strpos($_SERVER["HTTP_USER_AGENT"], 'Safari') ? true : false;
	$chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;
?> 

<head>

<meta name="viewport" content="width=device-width, user-scalable=no">

<link href="stylesheet.css" rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="jquery.slides.min.js"></script>

</head>

<body>


<div id="menu">
		<div class="menu_item" id="menu_home"><span class="menu_icon"><img src="home.png" /></span>Home</div>
		<div class="menu_item_empty"></div>
		<div class="menu_item" id="menu_research"><span class="menu_icon"><img src="research.png"/></span>Research</div>
		<div class="menu_item_empty"></div>
		<div class="menu_item" id="menu_projects"><span class="menu_icon"><img src="projects.png"/></span>Projects</div>
		<div class="menu_item_empty"></div>
		<div class="menu_item" id="menu_contact"><span class="menu_icon"><img src="contact.png"/></span>Contact</div>
		
		<script type="text/javascript">
			$('#menu_projects').click(function(){
				$('html, body').animate({
					scrollTop: $('#projs').offset().top
				}, 500);
			});
			
			$('#menu_home').click(function(){
				$('html, body').animate({
					scrollTop: $('#profile').offset().top
				}, 500);
			});
			
			$('#menu_research').click(function(){
				$('html, body').animate({
					scrollTop: $('#rsearch').offset().top
				}, 500);
			});
			
			$('#menu_contact').click(function(){
				$('html, body').animate({
					scrollTop: $('#git').offset().top
				}, 500);
			});
		</script>
</div>


<div id="container">


<div id="home">

	<div style="float:left;">
	<span style="font-family:'Fauna One', serif;font-size:35px;">Dhananjay Bhaskar &nbsp; </span>
	<span style="font-family:'Fauna One', serif;font-size:35px;">(Personal Website)</span>
	</div>
	
	<div style="clear:both;"></div><br/>
	
</div>


<div id="profile">
	<img src="profile.png"/>
	
	<div id="profile_left" class="d_left">
	<br><br>
	I am a graduate (M.Sc.) student studying Applied Mathematics and Computer Science at the 
	<a href="http://www.iam.ubc.ca">University of British Columbia</a>, Vancouver.
	</div>
	
	<div id="profile_right" class="d_right">
	</div>

	<div style="clear:both;"></div>
	
	<script type="text/javascript">
	$(function(){
		$('#profile_right').highcharts({
			chart:{
				type: 'bar',
				backgroundColor: '#f2f2f2',
				height: '300'
			},
			title:{
				text: 'Skills and Interests'
			},
			xAxis:{
				categories: ['HTML, CSS, JS', 'PHP, jQuery, SQL', 'MATLAB, Python, Bash', 'Java, Perl, C/C++'],
				title: {
					text: null
				}
			},
			yAxis:{
				title: {
					text: 'Experience (years)'
				}
			},
			tooltip:{
				valueSuffix: ' years'
			},
			plotOptions:{
				bar: {
					dataLabels:{
						enabled: false
					}
				}
			},
			legend:{
				enabled: false
			},
			series: [{
				name: 'Experience',
				data: [5, 3, 4, 2]
			}]			
		});
	});
	</script>
</div>


<div id="rsearch">
	<img src="search.png"/><br/>
	<h3>Page under construction.</h3>
	<div style="clear:both;"></div>
</div>


<div id="projs">
	<img src="proj.png"/>
	
	<div id="slides1" class="slides">
		<img src="projects/s1i1.png"/>
		<img src="projects/s1i2.png"/>
	</div>	
	
	<div class="proj_desc">
	<span class="proj_heading">Online Presentation Creator (2013)</span><br>
	<span class="proj_subheading">A HTML 5 Web Application</span><br>
	
	<br/>Designed to facilitate creation of health and wellness e-Learning modules for Clinemetrica Inc.<br/><br/>
	<b>Features :</b><br/>
	<ul style="line-height:150%;">
	<li>Customized CLEditor for rich text editing in English and French</li>
	<li>Version control for module creation (save and reload)</li>
	<li>Finished modules can be viewed in IE 7+</li>
	<li>User tracking capability to monitor viewing time for each slide</li>
	</ul>
	</div>
	
	<div style="clear:both;"></div>
	<div style="padding:0px 0px 30px 0px"></div>
	<div style="border-top:4px solid black;padding:0px 0px 30px 0px"></div>
	
	<div id="slides2" class="slides">
		<img src="projects/s2i1.png"/>
		<img src="projects/s2i2.png"/>
	</div>	
	
	<div class="proj_desc">
	<span class="proj_heading">Clinemetrica Inc. Web Interface (2013)</span><br>
	<span class="proj_subheading">Database Front-end and Data Analysis Tool</span><br>

	<br/>Perform queries and view aggregate customer information from the web.<br/><br/>
	<b>Features :</b><br/>
	<ul style="line-height:150%;">
	<li>Requests are sent using AJAX and JSON</li>
	<li>Secure, uses PHP Data Objects (PDO) to process requests</li>
	<li>Organises information in neat graphs using HighCharts JS</li>
	</ul>
	</div>
	
	<div style="clear:both;"></div>
	<div style="padding:0px 0px 30px 0px"></div>
	<div style="border-top:4px solid black;padding:0px 0px 30px 0px"></div>
	
	<div class="proj_desc">
	<span class="proj_heading">Educational Simulations (2011)</span><br>
	<span class="proj_subheading">Java Applets and HTML5 Applications</span><br>
	
	<br/>Created educational simulations demonstrating concepts in physics, computer science and mathematics.<br><br>
	The example on the right illustrates Monte Carlo methodology.<br/><br/>
	<b>Features :</b><br/>
	<ul style="line-height:150%;">
	<li>Intuitive and interactive</li>
	<li>Facilitates learning visually</li>
	<li>Advanced mechanics and electrodynamics simulations created using <a href="http://fem.um.es/Ejs/">EJS</a> framework</li>
	</ul>
	</div>
	
	<div style="float:right;">
	<? include('experiments.html'); ?>
	</div>
	
	<div style="clear:both;"></div>
</div>

<script type="text/javascript">
	$(function(){
		$("#slides1").slidesjs({
			navigation: false,
			pagination: false,
			play: {
				auto: true
			}
		});
		$("#slides2").slidesjs({
			navigation: false,
			pagination: false,
			play: {
				auto: true
			}
		});
	});
</script>


<div id="git">
	<img src="getintouch.png"/>
	
	<div id="git_left" class="d_left">
	<center><br>
	<a href="http://github.com/dbhaskar92" title="GitHub"><img src="github.png" width="64" height="64"/><a>
	&nbsp; &nbsp; &nbsp;
	<a href="http://ca.linkedin.com/pub/dhananjay-bhaskar/62/913/533" title="LinkedIn"><img src="lkin.png" width="64" height="64"/></a>
	<br><br>
	<a href="http://twitter.com/dbhaskar92" title="Twitter"><img src="twitter.png" width="60" height="60"/></a>
	&nbsp; &nbsp; &nbsp;
	<a href="http://facebook.com/dbhaskar92" title="Facebook"><img src="facebook.png" width="60" height="60"/></a>
	</center>
	</div>
	
	<div id="git_right" class="d_right">
	<img id="footer_map" src="http://maps.googleapis.com/maps/api/staticmap?center=49.26698,-123.25396&zoom=13&size=400x250&markers=color:blue%7C49.26698,-123.25396&sensor=false"/>
	</div>
	
	<div style="clear:both"></div><br>
</div>

<script type="text/javascript">
	$('#git').tooltip();
</script>


</div> <!-- End of container -->

</body>

</html>
