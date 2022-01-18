<!DOCTYPE html>
<html>
  <head>  
    <meta charset="UTF-8">
    <title>Hotel DRRH</title>
	<link rel="stylesheet" href="<?php echo base_url("/assets/css/header.css"); ?>" />
	<script src="https://kit.fontawesome.com/c2b30d2943.js" crossorigin="anonymous"></script> 
  <script type = 'text/javascript' src = "<?php echo base_url(); 
                ?>/assets/bootstrap/js/bootstrap.js"></script> 
  </head>
  <body >
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background:#FFFFFF;" >
  <div class="container-fluid" style="margin:auto; max-width: 60%; padding:10px;">
    <a class="navbar-brand" href="http://localhost/codeigniter/index.php/home" style="position: relative;
  left: 0px;">DRRH</a>
  <div style="position: relative; right: 0px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav" >
        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About
          </a>
          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="http://localhost/codeigniter/index.php/about">About Us</a></li>
            <li><a class="dropdown-item" href="http://localhost/codeigniter/index.php/framework">Our Framework</a></li>
            <li><a class="dropdown-item" href="http://localhost/codeigniter/index.php/partners">Partners</a></li>
            <li><a class="dropdown-item" href="http://localhost/codeigniter/index.php/contact_us">Contact Us</a></li>
          </ul>
        </li>
		    <li class="nav-item"><a href="http://localhost/codeigniter/index.php/ratedHotels" class="nav-link">Rated Hotels</a></li>
        <li class="nav-item"><a href="http://localhost/codeigniter/index.php/health" class="nav-link">Health and Safety Information</a></li>
        <li class="nav-item"><a href="http://localhost/codeigniter/index.php/news" class="nav-link">News</a></li>
        <li class="nav-item"><a href="http://localhost/codeigniter/index.php/faq" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="http://localhost/codeigniter/index.php/assessment" class="nav-link">Assessment</a></li>
        <li class="nav-item"><a href="http://localhost/codeigniter/index.php/admin" class="nav-link">admin</a></li>
      </ul>
    </div>
</div>
  </div>
</nav>
</html>