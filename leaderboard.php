<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SodukuMaster Game Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
<?php
  $levelnum = $_GET["level"];
  $timer = $_GET["timer"];
//  $hints = $_GET["hints"];
  $lboard = file_get_contents('levels/lboard'.$levelnum.'.txt');
  $lboard = preg_replace( "/\r|\n/", "", $lboard);
  $lboard = explode(" ", $lboard);
  unset($lboard[count($lboard) - 1]); //last element is empty using this method; remove it
  print_r($lboard);
?>
  <body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbarheader">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar">	</span>
					<span class="icon-bar">	</span>
					<span class="icon-bar"> </span>
				</button>

				<a class="navbar-brand" href="#">SudokuMaster</a>
			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"> Stuff </a></li>
					<li><a href="#"> Stuff </a></li>
					<li><a href="#"> Stuff </a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="jumbotron text-center">
			<h1> SudokuMaster Leaderboards </h1>
		</div>
	</div>

	<div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
			<form>
			<table width="500" height="500" class="center">
				<tr>
					<th> Position </th>
					<th> Name </th>
					<th> Score </th>
				</tr>
				<tr>
					<td>1.</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>2.</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>3.</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>4.</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>6.</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>7.</td>
					<td></td>
					<td></td>
					</tr>
				<tr>
					<td>8.</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>9.</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>10.</td>
					<td></td>
					<td></td>
				</tr>
			</table>
			</form>
		</div>
		<div class="col-sm-4">
		</div>
	</div>

	<div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
			<br>
            <a href="index.php" class="btn btn-danger"> Main Menu </a>
        </div>
    </div>

  </body>
</html>
