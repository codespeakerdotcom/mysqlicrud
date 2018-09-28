<!DOCTYPE html>
<html>
<head>
	<title>Basic CRUD in PHP</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		.box{
			background: #f0f0f0;
			padding: 20px;
		}
	</style>
</head>
<body> 

<div class="container"> 
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">CRUD</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="insert.php">Add User</a></li> 
          <li><a href="users.php">All Users</a></li>
        </ul>
        
      </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </nav> 
</div>