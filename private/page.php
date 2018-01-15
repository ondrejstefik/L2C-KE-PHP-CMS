<?php

require_once  dirname(__FILE__).'/../framework/loggedin.php';
include_once dirname(__FILE__).'/../framework/helpers.php';
if(!empty($_REQUEST["id"])) {
$result=db_query("SELECT * FROM pages WHERE ID =".$_REQUEST["id"]);
$page=mysqli_fetch_object($result);
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

					<h1 class="page-header">
                    <?php if(!empty($page)){
                        echo "Update page";  

                    }else{
                        echo "New page"; 
                    } ?></h1>


					<form class="form-signin" method="POST" action="pages.php">

						<input type="hidden" name="action" value="<?php  echo empty($page) ? "insert" : "update"; ?>">

						<input type="hidden" name="id" value="<?php  echo !empty($page) ? $page->ID : ""; ?>">

						<input type="hidden" name="user_id" value="<?php  echo !empty($page) ? $page->User_ID : ""; ?>">

						<input type="hidden" name="menu_order" value="0">



						<label for="title" class="sr-only">Title</label>

						<input type="text" id="title" name="title" value="<?php  echo !empty($page) ? $page->title : ""; ?>" class="form-control" placeholder="Title" required autofocus>



						<label for="menu_label" class="sr-only">Label</label>

						<input type="text" id="menu_label" name="menu_label" value="<?php  echo !empty($page) ? $page->menu_label : ""; ?>" class="form-control" placeholder="Label" required>



						<label for="content" class="sr-only">Content</label>

						<textarea id="content" name="content" class="form-control" placeholder="Content"><?php  echo !empty($page) ? $page->content : ""; ?></textarea>

						

						<button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>

					</form>

					

					<?php 

					if(!empty($page)){

					?>

					<form class="form-signin" method="POST" action="pages.php">

						<input type="hidden" name="action" value="delete">

						<input type="hidden" name="id" value="<?php  echo !empty($page) ? $page->ID : ""; ?>">

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