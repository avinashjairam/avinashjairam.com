<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About | Avinash Jairam</title>

	<link type="text/css" rel="stylesheet" href="./stylesheets/style1.css"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Latest compiled and minified JavaScript -->

	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>
	<div class="homepage">
		<nav class="navbar navbar-default">
	  		<div class="container-fluid">
	    		<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
	  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	    				<span class="sr-only">Toggle navigation</span>
	    				<span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
	  				</button>
	  				<div class="pushRight">
	 					<a class="navbar-brand" href="./index.php"><h4>AVINASH JAIRAM | SOFTWARE DEVELOPER</h4></a>
	 				</div>
				</div>

	    		<!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="./index.php"><h4>About Me </h4><span class="sr-only">(current)</span></a></li>
			        <li><a href="./resume.php"><h4>Resume</h4></a></li>
			        <li><a href="./projects.php"><h4>Projects</h4></a></li>
			        <li><a href="./contact.php"><h4>Contact Me</h4></a></li>		        
			      </ul>
			     
			     <!--
			      <ul class="nav navbar-nav navbar-right">
			      	<li><a href="https://www.linkedin.com/in/ajairam"><img class="social" src="./images/linkedin.png"/></a></li>
			        <li><a href="https://github.com/Avinash-Jairam"><img class="social" src="./images/github.png"/></a></li>		
			      </ul>-->
			   </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

		<div class="container contentContainer " id="">
			<div class="row box">
				<div class="col-md-2" >
				</div>

				<div class="col-md-4 "  >				
					<img id="profilePic" src="./images/avinash.png" alt="picture of avinash"/>							
				</div>

				<div class="col-md-4 content" >
					<p>I am a recent graduate of Brooklyn College with a degree in Computer Science. My undergraduate experience has 
				       empowered me with invaluable critical thinking, analytical, and problem solving skills. As a result, I am able to 
				       develop precise and elegant solutions to complex problems.  
					</p>

					<p>I have a great interest in each layer of application development. My primary language skills are PHP, Java, 
						HTML, CSS, JavaScript, JQuery, and MySQL. Also, I am proficient in the Bootstrap Framework, Git, Sublime Text,
						Eclipse, phpMyAdmin, Access, and Excel. 
					</p>

					<p>Presently, I am an independent full stack developer working on a several projects. Check out my <span>portfolio</span>
					 to see what I have made!
					</p>

					<p>Simply put, I eat, sleep, and breathe problem solving and writing code. However, I also enjoy reading, playing video games, and 
					   watching football.
					</p>
			    </div>

			    <div class="col-md-2" >
				</div>
			</div>
		</div>
	     
	  
		<div class="container contentContainer pushDown" id="footer">
			<div class="row">
				<div class="col-md-4 alignLeft" >					
						<ul>
							<li><span class=" leftFooter glyphicon glyphicon-map-marker"></span>LOCATED IN BROOKLYN, NY</li>
							<li><a href="./contact.php"><span class="leftFooter glyphicon glyphicon-envelope"></span>EMAIL ME</a></li>					
							<li id="resume"><a href="./Resume.pdf"><span class="leftFooter glyphicon glyphicon-download-alt"></span>DOWNLOAD RESUME PDF</a></li>
						</ul>
					
				</div>

				<div class="col-md-3" >
					
				</div>

				<div class="col-md-5 omaha" >
									
					   <ul >
				      	<li class="socialFooter"><a href="https://www.linkedin.com/in/ajairam"><img class="social" src="./images/linkedin.png"/></a></li>
				        <li class="socialFooter"><a href="https://github.com/avinashjairam"><img class="social" src="./images/github.png"/></a></li>		
				      </ul>	 					
				</div>

				
			</div>
		</div>

		<div class="container contentContainer">
			<div class="row">
				<div class="col-md-12 center" >
					<h6>&copyAvinashJairam.com  <?php echo date("Y") ?> </h6>
				</div>
			</div>
		</div>
	</div>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69727321-1', 'auto');
  ga('send', 'pageview');

</script>
	

</body>

<script>
      $(".homepage").css("min-height",$(window).height());
</script>


</html>