<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SudokuMaster Game Page</title>
	   <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="validate.js" type="text/javascript"></script>
  </head>
  <body>
<?php
  $levelnum = $_GET["level"];
  $difficulty = $_GET["difficulty"];
  $hints = $_GET["hints"];
  $level = file_get_contents('levels/level'.$levelnum.'.txt'); //get the level requested
  $level = explode(" ", $level); //convert numbers in the level to an array separated by " "
  unset($level[count($level) - 1]); //last element is empty using this method; remove it
?>
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
			<h1> SudokuMaster: L <?php echo $levelnum; ?> </h1>

		</div>
	</div>

	<div class="row">
        <div class="col-sm-4">
            <h3> Difficulty: Medium </h3>
        </div>
        <div class="col-sm-4">
              <h3> Time Remaining:</h3>
              <h3 onload="timer()" id="timer">Time</h3>
              <script src="timer.js" type="text/javascript"></script>
        </div>
        <div class="col-sm-4">
			<br>
            <a href="#" class="btn btn-danger"> Give Up </a>
            <a href="#" class="btn btn-danger"> Give Hint </a>
        </div>
    </div>

	<div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
    <form id="form" method="GET" onSubmit="return validate();" action="leaderboard.php">
		<table class="center" height="520" width="520">
			<tr>
				<td><input type="number" name="1-1" min="1" max="9" value="<?php echo $level[0] ?>"></td>
				<td><input type="number" name="2-2" min="1" max="9" value="<?php echo $level[1] ?>"></td>
				<td><input type="number" name="1-3" min="1" max="9" value="<?php echo $level[2] ?>"></td>
				<td><input type="number" name="1-4" min="1" max="9" value="<?php echo $level[3] ?>"></td>
				<td><input type="number" name="1-5" min="1" max="9" value="<?php echo $level[4] ?>"></td>
				<td><input type="number" name="1-6" min="1" max="9" value="<?php echo $level[5] ?>"></td>
				<td><input type="number" name="1-7" min="1" max="9" value="<?php echo $level[6] ?>"></td>
				<td><input type="number" name="1-8" min="1" max="9" value="<?php echo $level[7] ?>"></td>
				<td><input type="number" name="1-9" min="1" max="9" value="<?php echo $level[8] ?>"></td>
			</tr>
			<tr>
				<td><input type="number" name="2-1" min="1" max="9" value=""></td>
				<td><input type="number" name="2-2" min="1" max="9" value=""></td>
				<td><input type="number" name="2-3" min="1" max="9" value=""></td>
				<td><input type="number" name="2-4" min="1" max="9" value=""></td>
				<td><input type="number" name="2-5" min="1" max="9" value=""></td>
				<td><input type="number" name="2-6" min="1" max="9" value=""></td>
				<td><input type="number" name="2-7" min="1" max="9" value=""></td>
				<td><input type="number" name="2-8" min="1" max="9" value=""></td>
				<td><input type="number" name="2-9" min="1" max="9" value=""></td>
			</tr>
			<tr>
				<td><input type="number" name="3-1" min="1" max="9" value=""></td>
				<td><input type="number" name="3-2" min="1" max="9" value=""></td>
				<td><input type="number" name="3-3" min="1" max="9" value=""></td>
				<td><input type="number" name="3-4" min="1" max="9" value=""></td>
				<td><input type="number" name="3-5" min="1" max="9" value=""></td>
				<td><input type="number" name="3-6" min="1" max="9" value=""></td>
				<td><input type="number" name="3-7" min="1" max="9" value=""></td>
				<td><input type="number" name="3-8" min="1" max="9" value=""></td>
				<td><input type="number" name="3-9" min="1" max="9" value=""></td>
			</tr>
			<tr>
				<td><input type="number" name="4-1" min="1" max="9" value=""></td>
				<td><input type="number" name="4-2" min="1" max="9" value=""></td>
				<td><input type="number" name="4-3" min="1" max="9" value=""></td>
				<td><input type="number" name="4-4" min="1" max="9" value=""></td>
				<td><input type="number" name="4-5" min="1" max="9" value=""></td>
				<td><input type="number" name="4-6" min="1" max="9" value=""></td>
				<td><input type="number" name="4-7" min="1" max="9" value=""></td>
				<td><input type="number" name="4-8" min="1" max="9" value=""></td>
				<td><input type="number" name="4-9" min="1" max="9" value=""></td>
			</tr>
			<tr>
				<td><input type="number" name="5-1" min="1" max="9" value=""></td>
				<td><input type="number" name="5-2" min="1" max="9" value=""></td>
				<td><input type="number" name="5-3" min="1" max="9" value=""></td>
				<td><input type="number" name="5-4" min="1" max="9" value=""></td>
				<td><input type="number" name="5-5" min="1" max="9" value=""></td>
				<td><input type="number" name="5-6" min="1" max="9" value=""></td>
				<td><input type="number" name="5-7" min="1" max="9" value=""></td>
				<td><input type="number" name="5-8" min="1" max="9" value=""></td>
				<td><input type="number" name="5-9" min="1" max="9" value=""></td>
			</tr>
			<tr>
				<td><input type="number" name="6-1" min="1" max="9" value=""></td>
				<td><input type="number" name="6-2" min="1" max="9" value=""></td>
				<td><input type="number" name="6-3" min="1" max="9" value=""></td>
				<td><input type="number" name="6-4" min="1" max="9" value=""></td>
				<td><input type="number" name="6-5" min="1" max="9" value=""></td>
				<td><input type="number" name="6-6" min="1" max="9" value=""></td>
				<td><input type="number" name="6-7" min="1" max="9" value=""></td>
				<td><input type="number" name="6-8" min="1" max="9" value=""></td>
				<td><input type="number" name="6-9" min="1" max="9" value=""></td>
			</tr>
			<tr>
				<td><input type="number" name="7-1" min="1" max="9" value=""></td>
				<td><input type="number" name="7-2" min="1" max="9" value=""></td>
				<td><input type="number" name="7-3" min="1" max="9" value=""></td>
				<td><input type="number" name="7-4" min="1" max="9" value=""></td>
				<td><input type="number" name="7-5" min="1" max="9" value=""></td>
				<td><input type="number" name="7-6" min="1" max="9" value=""></td>
				<td><input type="number" name="7-7" min="1" max="9" value=""></td>
				<td><input type="number" name="7-8" min="1" max="9" value=""></td>
				<td><input type="number" name="7-9" min="1" max="9" value=""></td>
			</tr>
			<tr>
				<td><input type="number" name="8-1" min="1" max="9" value=""></td>
				<td><input type="number" name="8-2" min="1" max="9" value=""></td>
				<td><input type="number" name="8-3" min="1" max="9" value=""></td>
				<td><input type="number" name="8-4" min="1" max="9" value=""></td>
				<td><input type="number" name="8-5" min="1" max="9" value=""></td>
				<td><input type="number" name="8-6" min="1" max="9" value=""></td>
				<td><input type="number" name="8-7" min="1" max="9" value=""></td>
				<td><input type="number" name="8-8" min="1" max="9" value=""></td>
				<td><input type="number" name="8-9" min="1" max="9" value=""></td>
			</tr>
			<tr>
				<td><input type="number" name="nine1" min="1" max="9" value=""></td>
				<td><input type="number" name="nine2" min="1" max="9" value=""></td>
				<td><input type="number" name="nine3" min="1" max="9" value=""></td>
				<td><input type="number" name="nine4" min="1" max="9" value=""></td>
				<td><input type="number" name="nine5" min="1" max="9" value=""></td>
				<td><input type="number" name="nine6" min="1" max="9" value=""></td>
				<td><input type="number" name="nine7" min="1" max="9" value=""></td>
				<td><input type="number" name="nine8" min="1" max="9" value=""></td>
				<td><input type="number" name="nine9" min="1" max="9" value=""></td>
			</tr>
		</table>
    <input type="submit" class="btn btn-primary"></button>
	</form>
	</div>
        <div class="col-sm-4">

        </div>
	</div>

	<div class="row">
        <div class="col-sm-4">
            <h3> Hints: On </h3>
        </div>
        <div class="col-sm-4">
            <h3> Hints Used: 1 </h3>
        </div>
        <div class="col-sm-4">
			<br>
            <a href="index.php" class="btn btn-danger"> Main Menu </a>
            <!-- debug !-->
            <h3><?php   print_r($level); ?></h3>
        </div>
    </div>

  </body>
</html>
