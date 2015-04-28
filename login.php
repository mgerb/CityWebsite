<?php 
session_start();
include 'partials/header.php';
include 'database/pdo_connect.php';
		 
		 if(isset($_POST['submit'])){
		 $errMsg = '';
		 //username and password sent from Form
		 $username = trim($_POST['username']);
		 $password = trim($_POST['password']);
		 
		 if($username == '')
		 $errMsg .= 'You must enter your Username<br>';
		 
		 if($password == '')
		 $errMsg .= 'You must enter your Password<br>';
		 
		 
		 if($errMsg == ''){
		 $records = $conn->prepare("SELECT row_id, username, password FROM  credentials WHERE username = :username");
		 $records->bindParam(':username', $username);
		 $records->execute();
		 $results = $records->fetch(PDO::FETCH_ASSOC);
		 
		 if(count($results) > 0 && $password == $results['password']){
		 $_SESSION['username'] = $results['username'];
		 header('location:index.php');
		 exit;
		 }
		 
		 else{
		 $errMsg .= 'Username and Password are not found<br>';
		 }
		 }
		 }
	$conn = null;
?>

<body>

<!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">GM</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
			  
              <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">City Bill Pay <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="https://www.govpaynow.com/gps/user/plc/4942" target="_blank">Utilities</a></li>
				  <li><a href="https://www.govpaynow.com/gps/user/plc/4941" target="_blank">City Payments</a></li>
				  <li><a href="https://www.govpaynow.com/gps/user/plc/4940" target="_blank">Police Department</a></li>
                </ul>
			  </li>
			  
              <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Information <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="http://gm.k12.mn.us/" target="_blank"">Grand Meadow School</a></li>
				  <li><a href="http://grandmeadow.lib.mn.us/" target="_blank">Library</a></li>
				  <li class="divider"></li>
                  <li><a href="parks.php">Parks and Rec</a></li>
				  <li class="divider"></li>
				  <li><a href="directory.php?page=restaurants">Directory</a></li>
				  <li><a href="directory.php?page=other">Other Local Services</a></li>
                </ul>
			  </li>
            
			<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Departments <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="department.php?page=fire">Fire Department</a></li>
                  <li><a href="department.php?page=ambulance">EMS</a></li>
                  <li><a href="department.php?page=police">Police Department</a></li>
				  <li><a href="department.php?page=eda">EDA</a></li>
                </ul>
              </li>
			  
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">City Council <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="http://cityofgrandmeadow.weebly.com/index.html" target="_blank">Minutes</a></li>
                  <li><a href="http://cityofgrandmeadow.weebly.com/consent-agenda.html" target="_blank">Agenda</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="login.php">Login</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	  <br>
	  <br>
	  
    <div class="container">

      <form class="form-signin" action="login.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="username" class="sr-only">Username</label>
        <input name="username" type="text" id="username" class="form-control" placeholder="username" required autofocus>
		
        <label for="password" class="sr-only">Password</label>
        <input name="password" type="password" id="password" class="form-control" placeholder="Password" required>
		
        <button id="submit" class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
	 </form>
	 <div class="text-center">
	<?php 
			if (isset($errMsg))
			{
				echo $errMsg;
			}
		?>
		
	</div>
    </div> <!-- /container -->


     <!-- FOOTER -->
    <div class="navbar navbar-default navbar-fixed-bottom">
			<p class="text-center">Grand Meadow City Hall - 112 Grand Avenue East - <br>
									PO Box 38, Grand Meadow, MN 55936 - Telephone # 507-754-5280 - Email - cityofgm@hmtel.com</p>
		
	</div>
  </body>
  
  <?php include 'partials/footer.php';?>