<?php include('server.php') ?>
<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Personality Prediction</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top" background="header.jpg">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html" style="color:white">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php" style="color:white">Register/Login</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html" style="color:white">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

	<form method="post" action="register.php">
<center>
		<?php include('errors.php'); ?>\
    <br><br>
<br><br><br><br>
<h3 style="color:white;">Register</h3>
		<div class="cont">
			<input type="text" name="username" placeholder="Enter username" value="<?php echo $username; ?>">
		<br><br>
			<input type="email" placeholder="Enter email"name="email" value="<?php echo $email; ?>">
		<br><br>
			<input type="password" placeholder="Enter password" name="password_1">
		<br><br>
			<input type="password" placeholder="Renter password"name="password_2">
		<br><br>
			<button type="submit" class="btn" name="reg_user">Register</button>
		</p>
		<p style="color:white;">
			Already a member? <a href="login.php">Sign in</a>
		</p>
  </div>
</center>
	</form>

</body>

</html>