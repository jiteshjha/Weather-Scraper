<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Local Weather</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  
  </head>
  <body>
	
	  <div class="container-fluid mainContainer">
		  
		  <div class="row-fluid">
			  
			  <div class="col-md-8 col-md-offset-2 header">
				  
				  <h1 class="center">Local Weather Checker</h1>
				  
			  </div>
		  
		  </div>
		  
		  <div class="row-fluid">
			  <div class="col-md-8 col-md-offset-2 center" id="main">
				  <div class="mainContent">
				  <p class="lead">
					  What's the weather like where you live? Sunny? Cloudy? A bit of rain? Enter your city below and see how the weather's behaving in your area. 
				  </p>
				  
				  <form>
					  <div class="form-group">
						  <input name="city" id="city" type="text" class="form-control"  />
					  </div>
					  
					  <input type="submit" id="findMyWeather" class="btn btn-default btn-lg" name="submit" value="How's the weather?" />
				  </form>
				  
				  <div id="success" class="alert alert-success" role="alert">
				 	 This is dummy text!
				  </div>
				  
				  <div id="fail" class="alert alert-danger" role="alert">
				 	 Could not find weather data for that city. Please try again.
				  </div>
				  
				  <div id="noCity" class="alert alert-danger" role="alert">
				 	 Please enter a city.
				  </div>
				  
			  </div><!-- /.mainContent -->
			  </div><!-- /.col-md-12 end -->
		  </div><!-- /.row end -->
	  </div><!-- /.container end -->
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="scripts.js"></script>
  </body>
</html>