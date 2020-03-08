<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
    <!--link all the pages to the external styling css file, pmo_style.css-->
		<link href="pmo_style.css" rel="stylesheet" type="text/css">
    <!-- fontawesome is used for the icons-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <!-- Bootstrap References -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
<a class="navbar-brand" href="pmo_index.php"><img src="static/KSUBrand.png" width="50" height="50" alt="KSU Logo"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
			<?php if(isset($_SESSION['loggedin'])): ?>
	      <li class="nav-item active">
	        <a class="nav-link" href="pmo_index.php"><i class="fas fa-home"></i> Home<span class="sr-only">(current)</span></a>
	      </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Projects
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="create_project.php">Add New Project</a>
            <a class="dropdown-item" href="get_project.php">View All Projects</a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
      <?php else: ?>
          <!-- If logged out, show nothing in Navbar -->
      <?php endif; ?>

      <li class="nav-item active d-flex justify-content-end">
        <?php if(isset( $_SESSION['loggedin'])): ?>
            <a class="nav-link text-right" href="logout.php">Logout <span class="sr-only">(current)</span></a>
        <?php else: ?>
            <a class="nav-link text-right" href="login.php">Login <span class="sr-only">(current)</span></a>
        <?php endif; ?>

      </li>
  </div>
</nav>
</html>
