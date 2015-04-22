<?php include 'partials/header.php';?>

<body>
<?php
		
		if(isset($_POST['email']) && (isset($_POST['password'])))
		{
		/*
		PDO connection
		prepareSTMNT = SELECT * WHERE DB_Username = $username AND DB_Password = $password FROM user_TABLE
		result = prepareSTMNT execute
		if result != null
		if(isset($_POST['name']) && isset($_POST['password']))
		{
			session_start();
			$_SESSION['username'] = $username;
		}
		*/
	?>
		
		}
	  
    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


     <!-- FOOTER -->
    <div class="navbar navbar-default navbar-fixed-bottom">
			<p class="text-center">Grand Meadow City Hall - 112 Grand Avenue East - <br>
									PO Box 38, Grand Meadow, MN 55936 - Telephone # 507-754-5280 - Email - cityofgm@hmtel.com</p>
		
	</div>
  </body>
  
  <?php include 'partials/footer.php';?>