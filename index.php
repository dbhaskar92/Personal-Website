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
	<span style="font-family:'Fauna One', serif;font-size:35px;">Dhananjay Bhaskar</span>
	</div>
	
	<div style="clear:both;"></div>
	
</div>


<div id="profile">
	
	<div id="profile_left" class="d_left">
	<br>
	I am a doctoral candidate (3rd year Ph.D.) in Biomedical Engineering and Data Science at 
	<a href="https://www.brown.edu/research/labs/wong/people">Brown University</a>. I received a 
	master's degree (M.Sc.) from the <a href="https://www.iam.ubc.ca/">Institute of Applied Mathematics</a> 
	at the University of British Columbia.
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
				text: 'Skills & Interests'
			},
			xAxis:{
				categories: ['MATLAB, Python, R', 'Java, Julia, C/C++', 
					     'OpenMP, MPI, CUDA', 'HTML, CSS, JS', 'PHP, jQuery, SQL'],
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
				data: [6, 3, 2, 5, 2]
			}]			
		});
	});
	</script>
</div>


<div id="rsearch">

	<div style="float:left;">
	<span style="font-family:'Fauna One', serif;font-size:35px;">Research</span>
	</div>
	
	<div style="clear:both;"></div><br/><br/>

	<ol reversed style="line-height:150%;font-size:18px;">

	<li style="margin: 20px 0;">A methodology for morphological feature extraction and unsupervised cell classification.
	<b>Bhaskar, D.</b>, Lee, D., Kn&uacute;tsd&oacute;ttir, H., Tan, C., Zhang, M., Dean, P., Roskelley, C., Keshet, L. 
	[<a href="https://www.biorxiv.org/content/10.1101/623793v1.abstract">preprint</a>]
	</li>

	<li style="margin: 20px 0;">Analyzing collective motion with machine learning and topology. 
	<b>Bhaskar, D.</b>, Manhart, A., Milzman, J., Nardini, J., Storey, K., Topaz, C., Ziegelmeier, L.
	<a href="https://aip.scitation.org/doi/10.1063/1.5125493">Chaos</a> 29 (12), 123125, 2019. [<a href="https://arxiv.org/abs/1908.09081">preprint</a>]
	</li>

	<li style="margin: 20px 0;">Breast Cancer Cells Transition from Mesenchymal to Amoeboid Migration in Tunable Three-Dimensional Silk-Collagen Hydrogels.
	Khoo, A., Valentin, T., Leggett, S., <b>Bhaskar, D.</b>, Bye, E., Benmelech, S., Ip, B., Wong, I.
	<a href="https://pubs.acs.org/doi/abs/10.1021/acsbiomaterials.9b00519">ACS Biomaterials Science &amp; Engineering</a> 5 (9), 4341-4354, 2019.
	</li>

	<li style="margin: 20px 0;">Motility-limited aggregation of mammary epithelial cells into fractal-like clusters.
	Leggett, S., Neronha, Z., <b>Bhaskar, D.</b>, Sim, J., Perdikari, M., Wong, I.
	<a href="https://www.pnas.org/content/116/35/17298.short">PNAS</a> 116 (35), 17298-17306, 2019.
	</li>

	<li style="margin: 20px 0;">3D printed self-adhesive PEGDA-PAA hydrogels as modular components for soft actuators and microfluidics.
	Valentin, T., DuBois, E., Machnicki, C., <b>Bhaskar, D.</b>, Cui, F., Wong, I.
	<a href="https://pubs.rsc.org/ko/content/articlehtml/2019/py/c9py00211a">Polymer Chemistry</a> 10 (16), 2015-2028, 2019.
	</li>

	<li style="margin: 20px 0;">Coupling mechanical tension and GTPase signaling to generate cell and tissue dynamics.
	Zmurchock, C., <b>Bhaskar, D.</b>, Keshet, L.
	<a href="https://iopscience.iop.org/article/10.1088/1478-3975/aab1c0/meta">Physical Biology</a>, 5 (4), 046004, 2018.
	</li>

	<li>Polarization and migration in the zebrafish posterior lateral line system.
	Kn&uacute;tsd&oacute;ttir, H., Zmurchock, C., <b>Bhaskar, D.</b>, Palsson, E., Nogare, D., Chitnis, A., Keshet, L.
	<a href="https://journals.plos.org/ploscompbiol/article?id=10.1371/journal.pcbi.1005451&rev=2">PLoS Computational Biology</a>, 13 (4), e1005451, 2017.
	</li>

	</ol>

	<div style="clear:both;"></div><br/><br/>
</div>


<div id="projs">
	
	<div style="float:left;">
	<span style="font-family:'Fauna One', serif;font-size:35px;">Projects</span>
	</div>
	
	<div style="clear:both;"></div>
	<br/><br/>
	
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
	<div style="padding:0px 0px 30px 0px"></div>
	<div style="border-top:4px solid black;padding:0px 0px 30px 0px"></div><br/>
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
	
	<div style="float:left;">
	<span style="font-family:'Fauna One', serif;font-size:35px;">Contact</span>
	</div>
	
	<div style="clear:both;"></div>
	<br/><br/>
	
	<div id="git_left" class="d_left">
	<center>
	<a href="http://github.com/dbhaskar92"><img src="github.png" width="64" height="64"/><a>
	&nbsp; &nbsp; &nbsp;
	<a href="https://www.linkedin.com/in/dhananjay-bhaskar-53391362"><img src="lkin.png" width="64" height="64"/></a>
	&nbsp; &nbsp; &nbsp;
	<a href="http://twitter.com/dbhaskar92"><img src="twitter.png" width="60" height="60"/></a>
	&nbsp; &nbsp; &nbsp;
	<a href="http://facebook.com/dbhaskar92"><img src="facebook.png" width="60" height="60"/></a>
	</center>
	</div>
	
	<div id="git_right" class="d_right">
	<center>	
	</center>
	</div>
	
	<div style="clear:both"></div><br>
</div>

<script type="text/javascript">
	$('#git').tooltip();
</script>


</div> <!-- End of container -->

</body>

</html>
