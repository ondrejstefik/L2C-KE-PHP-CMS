<?php 
require_once  dirname(__FILE__).'/../framework/loggedin.php';
include_once dirname(__FILE__).'/../framework/helpers.php';
if(!empty($_REQUEST["id"])) {
$result=db_query("SELECT * FROM Users WHERE ID =".$_REQUEST["id"]);
$user=mysqli_fetch_object($result);
}


?>
<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">



		<title>Dashboard Template for Bootstrap</title>



		<!-- Bootstrap core CSS -->

		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	</head>



	<body>



		<nav class="navbar navbar-inverse">

			<div class="container-fluid">

				<div class="navbar-header">

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

					<span class="sr-only">Toggle navigation</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					</button>

					<a class="navbar-brand" href="#">Project name</a>

				</div>

				<div id="navbar" class="navbar-collapse collapse">

					<ul class="nav navbar-nav navbar-right">

						<li><a href="index.php">Dashboard</a></li>

						<li><a href="users.php">Users</a></li>

						<li><a href="pages.php">Pages</a></li>

					</ul>

				</div>

			</div>

		</nav>



		<div class="container-fluid">

			<div class="row">

				<div class="col-sm-12 col-md-12 main">

					<h1 class="page-header"><?php if(!empty($user)){
                        echo "Update user";  

                    }else{
                        echo "New user"; 
                    } ?></h1>



					<form class="form-signin" method="POST" action="users.php">

						<input type="hidden" name="action" value="<?php  echo empty($user) ? "insert" : "update"; ?>">

						<input type="hidden" name="id" value="<?php  echo !empty($user) ? $user->ID : ""; ?>">



						<label for="email" class="sr-only">Email address</label>

						<input type="email" id="email" name="email" value="<?php  echo !empty($user) ? $user->Email : ""; ?>" class="form-control" placeholder="Email address" required autofocus>

						

						<?php 

						if(empty($user)){

						?>

						<label for="password" class="sr-only">Password</label>

						<input type="password" id="password" name="password" value="<?php  echo !empty($user) ? $user->password : ""; ?>" class="form-control" placeholder="Password" required>

						<?php 

						}

						?>



						<label for="nickname" class="sr-only">Nickname</label>

						<input type="text" id="nickname" name="nickname" value="<?php  echo !empty($user) ? $user->nickname : ""; ?>" class="form-control" placeholder="Nickname">

						

						<button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>

					</form>

					

					<?php 

					if(!empty($user)){

					?>

					<form class="form-signin" method="POST" action="users.php">

						<input type="hidden" name="action" value="delete">

						<input type="hidden" name="id" value="<?php  echo !empty($user) ? $user->ID : ""; ?>">

						<button class="btn btn-lg btn-danger btn-block" type="submit">Delete</button>

					</form>

					<?php 

					}

					?>

					

				</div>

			</div>

		</div>



		<!-- Bootstrap core JavaScript

		================================================== -->

		<!-- Placed at the end of the document so the pages load faster -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	</body>

</html>