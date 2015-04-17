
	<?php include 'partials/header.php';?>

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
              <li class="active"><a href="#">Home</a></li>
			  
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
				  <li><a href="#" target="_blank">Library</a></li>
				  <li class="divider"></li>
				  <li class="dropdown-header">Parks and Rec</li>
                  <li><a href="#">City Park</a></li>
                  <li><a href="#">Veteran's Memorial Park</a></li>
				  <li><a href="#">Pine Lawn</a></li>
				  <li class="divider"></li>
				  <li><a href="#">Directory</a></li>
				  <li><a href="#">Other Local Services</a></li>
                </ul>
			  </li>
            
			<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Departments <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Fire Department</a></li>
                  <li><a href="#">Ambulence</a></li>
                  <li><a href="#">Police Department</a></li>
				  <li><a href="#">EDA</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Contact</a></li>
              <li><a href="login.php">Login</a></li>
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
	  
	  
	  <div id="directory-header" class="container-fluid">
	  <h1 class="header-text text-center">Directory</h1>
	  
	  
		  <div class="text-center" class="btn-group" role="group" aria-label="...">
			<a href="?page=restaurants"<button type="button" class="btn btn-default">Restaurants</button></a>
			<a href="?page=auto"<button type="button" class="btn btn-default">Auto</button></a>
			<a href="?page=ag"<button type="button" class="btn btn-default">Ag Business</button></a>
			<a href="?page=finance"<button type="button" class="btn btn-default">Finance & Law</button></a>
			<a href="?page=service"<button type="button" class="btn btn-default">Service</button></a>
			<a href="?page=churches"<button type="button" class="btn btn-default">Churches</button></a>
			<a href="?page=recreation"<button type="button" class="btn btn-default">Recreation</button></a>
			<a href="?page=realestate"<button type="button" class="btn btn-default">Real Estate</button></a>
			<a href="?page=insurance"<button type="button" class="btn btn-default">Insurance</button></a>
		</div>
	</div><!-- /.container -->
	<br>
	
	
	<?php
		
		
			if (isset($_GET["page"]))
			{
				$page = $_GET["page"];
				
				include "directory/{$page}.php";
			}
		
		
	 ?>
		
		
    

	 <!-- FOOTER -->
    <div class="navbar navbar-default navbar-fixed-bottom">
			<p class="text-center">Grand Meadow City Hall - 112 Grand Avenue East - <br>
									PO Box 38, Grand Meadow, MN 55936 - Telephone # 507-754-5280 - Email - cityofgm@hmtel.com</p>
		
	</div>
	
</body>

<?php include 'partials/footer.php';?>
