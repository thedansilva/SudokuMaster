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
    <script src="timer.js" type="text/javascript"></script>
  </head>

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
			<h1> SudokuMaster </h1>
		</div>
	</div>

	<div class="center">
        <div class="col-sm-4 col-sm-offset-4">
          <form id="form" method="GET" action="level.php">
          <h2>Level:</h2>
          <div class="form-group">
            <select class="form-control" name="level">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
          <h2> Difficulty:<h2>
            <div class="form-group">
              <select class="form-control" name="difficulty">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
        <!--  <h2> Hints:</h2>
            <div class="form-group">
              <select class="form-control" name="hints">
              <option value="0">ON</option>
              <option value="1">OFF</option>
            </select>-->
          <input type="submit" class="btn btn-warning"></a>
          </form>
        </div>
	</div>
  </body>
</html>
