<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/logo/Gruda icon.png" type="image/png">
	<title>Gruda Games - Home</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/flaticon/flaticon.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
    <style>
        /* Custom CSS for the hover effect */
        .card:hover {
            transform: scale(1.05);
            background-color: #f8f9fa;
            cursor: pointer;
        }
            /* Custom styling for the details page */
            .game-details {
                padding: 20px;
            }
            .pagination-container {
    text-align: center;
    margin: auto 0;
}
.test{
    width: fit-content;
    margin: 0 auto;
}



    </style>
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="Index.html"><img src="img/Gruda logo.png" alt="Gruda logo"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<li class="nav-item active"><a class="nav-link" href="Index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="About us.php">About</a></li>
							<li class="nav-item"><a class="nav-link" href="Gallery.php">Gallery</a>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="Price.php">Pricing</a>
									<li class="nav-item"><a class="nav-link" href="Games.php">Games</a>
									<li class="nav-item"><a class="nav-link" href="Elements.php">Elements</a>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="Blog.php">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="Single blog.php">Blog Details</a>
									</li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
						</ul>				
					<ul class="nav navbar-nav navbar-right">
    					<li class="nav-item dropdown">
        					<a href="#" class="nav-link dropdown-toggle custom-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="navbar-text">Welcome,<?php echo $_SESSION['user_name']; ?></span>
    						</a>
        					<div class="dropdown-menu" aria-labelledby="userDropdown">
            					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Profile</button>
            					<a class="dropdown-item" href="../logout.php">Logout</a>
        					</div>
    					</li>
					</ul>

					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->
<div class="container">
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
	<!-- Modal content-->
	<div class="modal-content">
	  <div class="modal-header">
		<h4 class="modal-title">Profile</h4>
	  </div>
	  <div class="modal-body">
	  <form method="POST" action="">
	  <div class="form-group">
    		<label for="exampleInputEmail1">Username</label>
   			 <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Enter username">
  		</div>
  		<div class="form-group">
    		<label for="exampleInputEmail1">Email address</label>
   			 <input type="email" name="email" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  		</div>
  		<div class="form-group">
    		<label for="exampleInputPassword1">Enter Password</label>
    		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  		</div>
		  <div class="form-group">
    		<label for="exampleInputPassword1">Confirm Password</label>
    		<input type="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
  		</div>
  		<button type="submit" class="btn btn-primary">Update</button>
	</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  </div>
	</div>
	
  </div>
</div>
</div>