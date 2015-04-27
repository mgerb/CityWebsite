	<?php 
	session_start();
	require ('vendor/autoload.php');
	include 'partials/header.php';
	$confirmMessage = "";
	
	if(isset($_SESSION['username'])) {//anything inside of if statement = authenticated user
		$session = true;
		$loginLink = "logout.php";
		$loginTitle = "Logout";
	}
	
	else
	{
		$session = false;
		$loginLink = "login.php";
		$loginTitle = "Login";
	}
	
	
	
	if(isset($_POST['submit']) && isset($_SESSION['username']))
	{
		include 'database/pdo_connect.php';
		
		$title = trim($_POST['title']);
		$announcement = trim($_POST['announcement']);
		$date = date('Y-m-d H:i:s');
		
		try{
		$query = $conn->prepare("INSERT INTO announcements(title, announcement, date) VALUES(:title, :announcement, :date)");
		
		$query->bindParam(':title', $title);
		$query->bindParam(':announcement', $announcement);
		$query->bindParam(':date', $date);
		$query->execute();
		
		$confirmMessage = "Information successfully entered";
		}
		
		catch(PDOException $e)
		{
			echo $e->getMessage();
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
              <li><a href="contact.php">Contact</a></li>
              <li><a href="<?=$loginLink?>"><?=$loginTitle?></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	  <br>
	  <br>
	  
    <div class="container">

      <form class="form-announce" action="aForm.php" method="post">
        <h2 class="form-announce-heading text-center">Enter City Announcement</h2>
		
        <label for="inputTitle" class="sr-only">Title</label>
        <input name="title" type="text" id="inputTitle" class="form-control" placeholder="Title" required autofocus>
		<br>
        <label for="inputAnnouncement" class="sr-only">Announcement</label>
        <textarea class="text-area-size" name="announcement" id="inputAnnouncement" placeholder="Please enter city announcement..." required></textarea>
		
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Enter Announcement</button>
		
      </form>
	  
	  <div class="text-center">
		<span><?=$confirmMessage?></span>
	  </div>
	  
    </div> <!-- /container -->


     <!-- FOOTER -->
    <div class="navbar navbar-default navbar-fixed-bottom">
			<p class="text-center">Grand Meadow City Hall - 112 Grand Avenue East - <br>
									PO Box 38, Grand Meadow, MN 55936 - Telephone # 507-754-5280 - Email - cityofgm@hmtel.com</p>
		
	</div>
  </body>
  
  <?php include 'partials/footer.php';?>