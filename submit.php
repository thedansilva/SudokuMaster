<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SodukuMaster Game Page</title>
	   <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="tablestyle.css">
  </head>
<?php
  $username = $_POST["username"];
  $userscore = $_POST["userscore"];
  $levelnum = $_POST["levelValue"];
  $lboard = file_get_contents('levels/lboard'.$levelnum.'.txt');
  $lboard = preg_replace( "/\r|\n/", "", $lboard);
  $lboard = explode(" ", $lboard);
  unset($lboard[count($lboard) - 1]); //last element is empty using this method; remove it
  $names = [];
  $scores = [];
  for ($y = 0; $y < 10; $y++) {
    $names[$y] = $lboard[$y * 2];
    $scores[$y] = $lboard[($y * 2) + 1];
  }
  $x = 0;
  $position = 0;
  $scoreposted = false;
  $output = "";
  for($x = 0; $x < 10; $x++){
    if ($userscore > $scores[$x] && !$scoreposted) {
        $output .= $username." ".$userscore." "."\r\n";
        $scoreposted = true;
    } else {
      $output .= $names[$position]." ".$scores[$position]." "."\r\n";
      $position++;
      }
    }
?>
  <body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbarheader">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				</button>
				<a class="navbar-brand" href="#">SudokuMaster</a>
			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
          <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"> Contact </a></li>
					<li><a href="https://vine.co/v/exDlqa6Y9et"> About Us </a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="jumbotron text-center">
			<h1> SudokuMaster Leaderboard: Level <empty id='level'><?php echo $levelnum?></empty> </h1>
		</div>
	</div>

	<div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
			<table width="500" height="500" class="center">
        <h1>Your score has been submitted, <?php echo $username?>. Thank you for playing!</h1>
        <!--debug h1><?php echo nl2br($output)?></h1-->
        <?php file_put_contents('levels/lboard'.$levelnum.'.txt', (rtrim($output)." "));?>
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
