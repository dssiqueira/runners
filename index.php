<html>
  <head>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
    <meta name="google-signin-client_id" content="1004959689078-0tc7p0enbjr3eq9h2p2j72pmt1g0g7u2.apps.googleusercontent.com">
    <link href='css/home.css' rel='stylesheet' type='text/css'>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  </head>
  <body class="homepage">
    <div id="logo" style="margin-top: 160px;">
      	<img src="images/CIT.png" width="30%"></img>
      	<h1>Health</h1>
      	<div style="position: absolute; right: 50%; margin-right: -120px;">
  			<?php  			
  			if ($_SERVER['HTTP_HOST']  == 'localhost'){
	    		echo '<form action="app.php" method="POST">';
		    	echo '<input type="hidden" name="email" value="hguidi@ciandt.com">';
		    	echo '<input type="submit" value="Sign in with Google">';
		    	echo '</form>';
    		} else {
    			echo '<div id="my-signin2"></div>';
    		}?>
      	</div>
    </div>
	  <script src="js/home.js"></script>
      <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
	</body>
</html>
