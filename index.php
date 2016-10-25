<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Inteface Start -->
	<div class="container" ng-app="HelloApp">
		<div class="row">
			<div class="col-md-8">
				<h1 id="title">Content</h1>
				<div class="row">
					<div class="col-md-6" ng-controller="FormController">
						<form>
							<div class="form-group">
								<label for="">Email</label>
								<input name="email" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input name="password" type="password" class="form-control" />
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<button class="btn btn-info">
											Register
										</button>
									</div>
									<div class="col-md-6">
										<button class="btn btn-primary" ng-click="login()">
											Login
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-6">
					image
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-12">
						<p>
						Inputs and selects
						have width: 100%; applied by default in Bootstrap. Within inline forms, we reset that to width: auto; so multiple controls can reside on the same line. Depending on your layout,
						additional custom widths may be required.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				Sidebar
				<button class="btn btn-default">Click</button>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
  </body>
</html>