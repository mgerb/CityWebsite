
	<?php 
	require ('vendor/autoload.php');
	include 'partials/header.php';?>

  <body>

  
  <?php
	session_start();
	if(isset($_SESSION['username'])) {//anything inside of if statement = authenticated user
		echo 'Welcome, '.$_SESSION['username']; //do whateve you want with username from here
		
		//logout set up in logout.php call from wherever. if user = authenticated switch upper right to logout insead of log in?
	}
  
  ?>
  
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
				  <li><a href="#">Other Local Services</a></li>
                </ul>
			  </li>
            
			<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Departments <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="department.php?page=fire">Fire Department</a></li>
                  <li><a href="department.php?page=ambulance">Ambulence</a></li>
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
              <li><a href="login.php">Login</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	  
	  <div class="container">
		
				<h1 class="header-text text-center color-white">City of Grand Meadow</h1>
				<hr>
				<br>
				<img class="img-center" src="logo.png" alt="logo">'
				
	  </div>
	  </div>
	  
	  
	  <div class="container">
	  
		<div class="jumbotron full-transparent">
		
		
				
				<h1 class="text-center"><span>Welcome to Grand Meadow!</span></h1>
					
				<p>
					We are excited about using this site to communicate with our residents, businesses and visitors. Grand Meadow is located on Highway 16, between Rochester and Austin, in Mower County.
				</p>
				<br>
				<p>
					A bright sunny morning in the 1850's, as the story goes, a gentleman's gaze encompassed the beautiful and peaceful prairie grass landscape and proclaimed, "What a Grand Meadow"! Thus, our town's name was conceived. Grand Meadow was established in 1862, four years after the statehood of Minnesota. Even though the prairie grass landscape is now covered with brick and mortar, the "Grand Meadow" still offers a beautiful and peaceful existence to our residents.
				</p>
				
				<p>
					Grand Meadow is now a modern and progressive community. We offer a "State of the Art" school, Mayo Health Satellite, Four churches, Assisted Living/Nursing Home facility, active ambulance and fire department, three parks, city library, new housing as well as establiched homes for sale. We pride ourselves in providing a safe and tranquil life for families who want to leave the big city behind. We are proud of our community and welcome you to be part of our "little piece of heaven" in our "Grand Meadow".
				</p>
			
		</div>
	  
	  
	  <div id="calTest" >	  
	  
	  <iframe src="https://www.google.com/calendar/embed?src=n5aqev2bcan4cauun30cgmvh30%40group.calendar.google.com" ></iframe>
	  
	 </div>
	  
	 <hr class="hr-normal">
	  
	  
	
	  
		
		
		
		<div class="row">
			<h1 class="text-center">City of Grand Meadow Residents</h1>
			<div class="col-lg-6 ">
				<p>The City of Grand Meadow is asking it’s water customers to monitor the temperature of their water and to continue to monitor the temperature through March. 
				The reason for this is that the frost level in the ground is at a depth not seen in the last 20 to 30 years. To test, run your cold water line from a faucet for 
				5 minutes then check the temperature of the water. If the water temperature gets below 40 degrees Fahrenheit, you should start running a pencil-width stream of water 
				from the faucet. After you start running the water please contact City Hall so that the city can monitor the issue city wide.
				</p>
				
			</div>
			
			<div class="col-lg-6 ">
				<p>The Grand Meadow City Council and the water/sewer department would like to remind you DO NOT put rags and or clothing in the sewer system. 
				This has been an ongoing issue in the city and as of the last 2 months has been extremely costly to the city. The pump in the Pheasant Run area 
				has needed work done 3 times in the last 2 months, and if this persists the cost could be accessed to the residents. This reminder is for all Grand Meadow residents regardless of location.
				</p>
				
			</div>
			
			
			
			<div class="col-md-12">
			<h4 class="text-center">Thank-you, City of Grand Meadow</h4>
		
			</div>
		
		</div>
		
		<hr class="hr-normal">
		
    </div><!-- /.container -->

	 <!-- FOOTER -->
    <div class="navbar navbar-default navbar-fixed-bottom">
			<p class="text-center">Grand Meadow City Hall - 112 Grand Avenue East - <br>
									PO Box 38, Grand Meadow, MN 55936 - Telephone # 507-754-5280 - Email - cityofgm@hmtel.com</p>
		
	</div>
	
</body>

<?php include 'partials/footer.php';?>
