<?php
// define variables and set to empty values
$to       = "avinash.jairam@gmail.com";
$nameErr  = $emailErr = $subjectErr = $messageErr = $captchaErr= "";
$name     = $email = $subject = $message = "";
$captcha;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
  else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["subject"])) {
    $subjectErr = "Subject is required";
  } 
  else {
    $subject = test_input($_POST["subject"]);
  }

  if (empty($_POST["message"])) {
    $messageErr = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
  }
  if(isset($_POST['g-recaptcha-response'])){
      $captcha=$_POST['g-recaptcha-response'];
  }
  else{
      $captchaErr="Plese check the captcha form";
  }

  $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfUoRATAAAAAIt1fJPmWdPv_gNasSwSKgEbi6hv=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

  if(empty($nameErr) && empty($emailErr) && empty($subjectErr) && empty($messageErr) && empty($captchaErr) && $response.success==true){
    $headers="From: ".$name . "via ".$email."\r\n"; 
    if(mail($to,$subject,$message,$headers)){
      echo "<script>alert('Message Sent');</script>";
    }
  }
 
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact | Avinash Jairam</title>
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
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
			        <li><a href="./index.php"><h4>About Me </h4><span class="sr-only">(current)</span></a></li>
			        <li><a href="./resume.php"><h4>Resume</h4></a></li>
			        <li><a href="./projects.php"><h4>Projects</h4></a></li>
			        <li class="active"><a href="./contact.php"><h4>Contact Me</h4></a></li>		        
			      </ul>
			     
			     <!--
			      <ul class="nav navbar-nav navbar-right">
			      	<li><a href="https://www.linkedin.com/in/ajairam"><img class="social" src="./images/linkedin.png"/></a></li>
			        <li><a href="https://github.com/Avinash-Jairam"><img class="social" src="./images/github.png"/></a></li>		
			      </ul>-->
			   </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container contentContainer">
			<div class="row col-md-12 col-md-offset-3">
				<div class="col-md-6 box" >
					<form method="post">
                       <div class="form-group">                              
                             <label>Name</label><span class="error">*</span>
                            <input type="Name" class="form-control" placeholder="Name" name="name" value="<?php echo $_POST['name'];?>"/>
                      </div>
            
	                   <div class="form-group">
	                           <label>Email</label><span class="error">*</span>
	                           <input type="Email" class="form-control" placeholder="Email" name="email" value="<?php echo $_POST['email'];?>"/>
	                    </div>

	                    <div class="form-group">
	                           <label>Subject</label><span class="error">*</span>
	                           <input type="Subject" class="form-control" placeholder="Subject" name="subject" value="<?php echo $_POST['subject'];?>"/>
	                    </div>            
	                            

		                  <div class="form-group">
		                           <label>Message</label> <span class="error">*</span>                      
		                          <textarea class="form-control" name="message" value="<?php echo $_POST['message'];?>" /></textarea>                   
		                  </div>

		                  <div class="form-group">
		                    <div class="g-recaptcha" data-sitekey="6LfUoRATAAAAAIt1fJPmWdPv_gNasSwSKgEbi6hv"></div>
		                  </div>

		                 <div class="form-group">
		                         <input type="submit" class="btn btn-success" value="Send" name="submit" />
		                         <input type="submit" class="btn btn-danger" value="Clear" />

		                  </div>
                        <span class="error"><?php echo " * Field Required";?></span><br><br>
                        <span class="error"><?php echo $nameErr;?></span><br>
                        <span class="error"><?php echo $emailErr;?></span><br>
                        <span class="error"><?php echo $subjectErr;?></span><br>
                        <span class="error"><?php echo $messageErr;?></span><br>
                        <span class="error"><?php echo $captchaErr;?></span><br>
                    </form>
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
				        <li class="socialFooter"><a href="https://github.com/Avinash-Jairam"><img class="social" src="./images/github.png"/></a></li>		
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

             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69727321-1', 'auto');
  ga('send', 'pageview');

</script>


	

</body>
</html>