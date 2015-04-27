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
                  <li class="active"><a href="parks.php">Parks and Rec</a></li>
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
	  
	  <div class="container">
				<h1 class="header-text text-center color-white">City of Grand Meadow</h1>
				<hr>
				<br>
				<img class="img-center" src="logo.png" alt="logo">
	  </div>
	  </div>
	  <br>
	  
	<div class="container">
		<h1 class="text-center header-text">Parks and Recreation<h1>
		
		<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">City Park</h2>
          <p class="lead">The City Park is the place to be! There is a basketball court and two sand volleyball courts. During Meadowfest the volleyball courts will be used for the sand volleyball tournament. The park is also child friendly with swings and a slide. City Park also has a pavilion if you would like to have a picnic.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="parks/citypark.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Veteran's Memorial Park</h2>
          <p class="lead">The Old School Park is a great place to spend time on a nice summer day. The reason that it is called the old school
park is that it is the playground of the old Grand Meadow school that used to stand to the east of the playground. 
The Old School park is a great place for kids with some new playground equiptment.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="parks/memorialpark1.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Pine Lawn</span></h2>
          <p class="lead">Pine Lawn Park, situated on Hwy 16 east of Grand Meadow, has two locations. One on the east side and the west side of the creek that runs through the park. 
		  There is camping on both sides, at a cost of $10/night for campers and $5/night for tents. There is electricity but no water hook ups. On the east side there is a nice pavilion for picnics and restrooms. 
		  On the west side there is a very nice playground equipment and restrooms. Many people like to fish and there is a few that will put in small boats</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="parks/pinelawn.jpg" alt="Generic placeholder image">
        </div>
      </div>
		
    </div>

	 <!-- FOOTER -->
    <div class="navbar navbar-default navbar-fixed-bottom">
			<p class="text-center">Grand Meadow City Hall - 112 Grand Avenue East - <br>
									PO Box 38, Grand Meadow, MN 55936 - Telephone # 507-754-5280 - Email - cityofgm@hmtel.com</p>
		
	</div>
	
</body>

<?php include 'partials/footer.php';?>
