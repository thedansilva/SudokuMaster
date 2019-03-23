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
  $levelnum = $_GET["level"];
  $timer = $_GET["timer"];
//  $hints = $_GET["hints"];
  $lboard = file_get_contents('levels/lboard'.$levelnum.'.txt');
  $lboard = preg_replace( "/\r|\n/", "", $lboard);
  $lboard = explode(" ", $lboard);
  unset($lboard[count($lboard) - 1]); //last element is empty using this method; remove it
  $names = [];
  $scores = [];
  $y = 0;
  $seconds = 300 - ($timer[0] * 60) + ($timer[2] * 10) + ($timer[3]);
  $userScore = 10000 - (10 * $seconds);
  for ($y = 0; $y < 10; $y++) {
    $names[$y] = $lboard[$y * 2];
    $scores[$y] = $lboard[($y * 2) + 1];
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
      <form id="submitScore" method="GET" onSubmit="return addScore();" action="submit.php">
				<tr>
					<th> Position </th>
					<th> Name </th>
					<th> Score </th>
				</tr>
        <input type="hidden" name='levelValue' value=<?php echo $levelnum?>>
        <?php
        $x = 0;
        $position = 0;
        $scoreposted = false;
        for($x = 0; $x < 10; $x++){
          echo '<tr><td>';
          if ($userScore > $scores[$x] && !$scoreposted) {
              echo  $x+1 .'</td>';
              echo '<td> <input type="text" name="username" maxlength=3 style="text-align:center;"> </td>';
              echo '<td> <input type="text" name="userscore" value="'.$userScore.'" readonly style="text-align:center;"> </td>';
              $scoreposted = true;
          } else {
          echo  $x+1 .'</td>';
          echo '<td><span value="'.$names[$position].'">'.$names[$position] .'</span></td>';
          echo '<td><span value="'.$scores[$position].'">'.$scores[$position].'</span></td>';
          $position++;
        }
          echo '</tr>';
        }
        ?>
			</table>
    <input type="submit" class="btn btn-primary" id="submitButton" enabled></button>
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
