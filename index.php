	<?php 
	session_start();
	require ('vendor/autoload.php');
	include 'partials/header.php';
	
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
	
	include 'database/pdo_connect.php';
	
	$query = "SELECT row_id, title, announcement, date FROM announcements";
	$resultset = $conn->query($query);
	$resultset->setFetchMode(PDO::FETCH_ASSOC);
	$conn= null;
	
	$json_string = file_get_contents("http://api.wunderground.com/api/9f736e3015c376c4/forecast/q/MN/Grand_Meadow.json");
	$parsed_json = json_decode($json_string, true);
	$parsed_json = $parsed_json['forecast']['simpleforecast']['forecastday'];
	
	?>

  <body>
  
	  	<div class="header">
	
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
              <li class="active"><a href="index.php">Home</a></li>
			  
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
              <li><a href="<?=$loginLink?>"><?=$loginTitle?></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	  
	  <div class="container">
		
				<h1 class="header-text text-center color-white">City of Grand Meadow</h1>
				<hr>
				<br>
				<img class="img-center" src="logo.png" alt="logo">
				
	  </div>
	  </div>
	  
	  
	  <div class="container">
	  
		
		
		
				
				<h1 class="text-center header-text">Welcome to Grand Meadow!</h1>
					
				<p class="p-big">
					We are excited about using this site to communicate with our residents, businesses, and visitors. Grand Meadow is located on Highway 16, between Rochester and Austin, in Mower County.
				</p>
				<br>
				<p class="p-big">
					A bright sunny morning in the 1850's, as the story goes, a gentleman's gaze encompassed the beautiful and peaceful prairie grass landscape and proclaimed, "What a Grand Meadow"! Thus, our town's name was conceived. Grand Meadow was established in 1862, four years after the statehood of Minnesota. Even though the prairie grass landscape is now covered with brick and mortar, the "Grand Meadow" still offers a beautiful and peaceful existence to our residents.
				</p>
				
				<p class="p-big">
					Grand Meadow is now a modern and progressive community. We offer a "State of the Art" school, Mayo Health Satellite, Four churches, Assisted Living/Nursing Home facility, active ambulance and fire department, three parks, city library, new housing as well as establiched homes for sale. We pride ourselves in providing a safe and tranquil life for families who want to leave the big city behind. We are proud of our community and welcome you to be part of our "little piece of heaven" in our "Grand Meadow".
				</p>
			
		
	  
	 
	  
	  
	 <div class="row text-center">
	 
				<h1>Weather Forecast</h1>
				
				 <hr class="hr-normal">
				
				<?php foreach($parsed_json as $key => $value) { ?>
					
					<div class="col-md-3">
					
						<img src="<?=$value['icon_url']?>" alt="logo">
						
						<br>
						
						<?=$value['date']['weekday']?>
						
						<br>
						
						<?=$value['date']['month']?> / <?=$value['date']['day']?>
						
						<br>
						
						<?=$value['pop'];?>% Precipitation
						
						<br>
						
						<span class="color-red">High <?=$value['high']['fahrenheit']?>F
						<br>
						
						<span class="color-blue">Low <?=$value['low']['fahrenheit']?>F
					
					</div>
					
					
				<?php } ?>
			
	</div>
		
		
		
		<br>
		
		</div><!-- /.container -->
		
		<div class="header2">
		
			<div class="container">
				
				<div class="responsive-iframe-container" >	  
			  
						<iframe src="https://www.google.com/calendar/embed?src=n5aqev2bcan4cauun30cgmvh30%40group.calendar.google.com" ></iframe>
			  
				</div>
				
			</div>
		</div>
	
	<div class="container">
		
		<div class="row">
			<h1 class="text-center">City of Grand Meadow Residents</h1>
			
			<?php if (isset($_SESSION['username'])){ ?>
			
				<a href="aForm.php"><h2 class="color-red text-center">Enter Announcement</h2></a>
			
			<?php } ?>
			
			
			
			
			<?php while ($r = $resultset->fetch()): ?>
			<div class="col-lg-6">
				<div class="text-center"><h3><?=htmlspecialchars($r['title'])?></h3></div>
				<p><?=htmlspecialchars($r['announcement'])?></p>
				
				<?php if (isset($_SESSION['username'])){ ?>
				<div class="text-center">
				<form action="database/deleteAnnouncement.php" method="post">
					<input name="row_id" type="hidden" value="<?=htmlspecialchars($r['row_id'])?>">
					
					<button name="submit" type="submit">Delete</button>
				</form>
				</div>
				<?php } ?>
				
			</div>
			<?php endwhile; ?>
			
			<div class="col-md-12">
			<h4 class="text-center">Thank-you, City of Grand Meadow</h4>
		
			</div>
		
		</div>

    </div>
	
	<div class="header2">
	
		<div class="container" id="mapDiv">
			<h5 class="text-center"> Grand Meadow <h5>
			
			<div id ="map"> </div>
			
   
		</div>
	
	</div>

	 <!-- FOOTER -->
    <div class="navbar navbar-default navbar-fixed-bottom">
			<p class="text-center">Grand Meadow City Hall - 112 Grand Avenue East - <br>
									PO Box 38, Grand Meadow, MN 55936 - Telephone # 507-754-5280 - Email - cityofgm@hmtel.com</p>
		
	</div>
	
</body>

<?php include 'partials/footer.php';?>
