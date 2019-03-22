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
  $diffset = 11 - $difficulty;
//  $hints = $_GET["hints"];
  $level = file_get_contents('levels/level'.$levelnum.'.txt'); //get the level requested
  $levelstaple = file_get_contents('levels/Level'.$levelnum.'ANS.txt'); //get STAPLE numbers for each table i.e numbers we need in order to solve the table/have ONE unique solution
  $level = preg_replace( "/\r|\n/", "", $level);
  $levelstaple = preg_replace( "/\r|\n/", "", $levelstaple);
  $parseLeveltoJS = $level; // for JS parsing
  $level = explode(" ", $level); //convert numbers in the level to an array separated by " "
  $level = str_replace("\n", "", $level);
  //$level = str_replace(array("\r", "\n"), '', $level)
  $levelstaple = explode(" ", $levelstaple); //convert numbers in the level to an array separated by " "
  unset($level[count($level) - 1]); //last element is empty using this method; remove it
  unset($levelstaple[count($levelstaple) - 1]); //last element is empty using this method; remove it
  $diffString = "";
  if ($difficulty <= 2) {
    $diffString = "Easy";
  } elseif ($difficulty > 3 && $difficulty <= 7) {
    $diffString = "Medium";
  } else {
    $diffString = "Hard";
  }
  function fillCell($x) {
      global $levelstaple;
      global $level;
      global $difficulty;
      if ($levelstaple[$x] == 0) {
        if (rand(0, $difficulty * 2) == 1) {
          return $level[$x].'"';
          //return '"'; DEBUG
        }
      }
      if ($levelstaple[$x] == 1 || $difficulty == 0) {
          return $level[$x].'" readonly style="color:blue;font-weight:bold"';
        } else {
          return '"';
      }
  }
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
      <form id="form" method="GET" onSubmit="return validate();" action="leaderboard.php">
			<h1> SudokuMaster: L<input type="hidden" id='level' name='level' value='<?php echo $levelnum ?>'><?php echo $levelnum; ?></h1>

		</div>
	</div>

	<div class="row">
        <div class="col-sm-4">
            <h3> Difficulty: <?php echo $diffString;?> </h3>
        </div>
        <div class="col-sm-4">
              <h3> Time Remaining: <span onload="timer()" name="timer2" id="timer">Time</span></h3>
              <input type="hidden" name="timer" id="timer2">
              <script src="timer.js" type="text/javascript"></script>
        </div>
        <div class="col-sm-4">
			<br>
            <script src="giveUp.js" type="text/javascript"></script>
            <button onclick="giveUp()" type="button" class="btn btn-danger"> Give Up </button>
            <!--a href="#" class="btn btn-danger"> Give Hint </a-->
        </div>
    </div>

	<div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
		<table class="center" height="520" width="520">
        <?php
          $counter = 0; //counter for populating the table
          for ($x = 1; $x <= 9; $x++) {
            //echo "\t\t".'<tr>'."\n";
            echo '<tr>';
            for ($y =1; $y <= 9; $y++) {
				          echo str_replace("\n", '', "\t\t".'<td><input type="number" id="input'.$counter.'" min="1" max="9" value="'.fillCell($counter).'></td>')."\n";
				          //echo str_replace("\n", '', "\t\t".'<td><input type="number" min="1" max="9" value="'.fillCell($counter).'></td>')."\n";
                  $counter++;
          }
        }
      //  echo "\t\t".'</tr>'."\n";
        echo '<tr>';
        ?>

		</table>
    <input type="submit" class="btn btn-primary" id="submitButton" enabled></button>
	</form>
	</div>
        <div class="col-sm-4">

        </div>
	</div>

  <p onmousedown='return false;' onselectstart='return false;' style="font-size:0px;" id='answer'><?php echo $parseLeveltoJS ?></p>
  <!-- for parsing the level's answer key to JS. undetectable by user.-->
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
            <!--<h3><?php   print_r($levelstaple); ?></h3> debug !-->
        </div>
    </div>
  </body>
</html>
