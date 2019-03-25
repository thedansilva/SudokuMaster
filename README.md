# SudokuMaster
SudokuMaster is a web based application that allows users to enjoy the game of Sudoku, featuring many puzzles, difficulties and great variety. 

### Requirements
wamp server
browser
etc

### What is Sudoku?
Sudoku is a logic based, number based puzzle. 

### Rules of Sudoku
The objective of the game is to fill a 9×9 grid with digits so that each column, each row, and each of the nine 3×3 subgrids that compose the grid obtain all of the digits from 1 to 9. 

### Getting Started
The first page of the application you will see is a menu page that will ask you to select level and difficulty so that a puzzle can be tailored to the users specific needs. 

This first page also includes an about and contact us button for the pleasure of the users.

![](https://imgur.com/ZqI7PKI.jpg) 

### Setting up the game
1. Open index.php on a locally hosted server (WAMP, etc).
2. Navigate to the "level" and "difficulty" selection.
3. etc.
4. etc.
5. etc.

### Game Board

On the second page (level.php), the Sudoku board will generate a puzzle according to the difficulty and level setting chosen from the first page. The game board is free for user input and users can input solutions into each individual cell. 
Level.php grabs the user's input for level and difficulty and returns a Sudoku table of the level found in levels/.

The board also features a "Give Up" button that will display the solution to the user if the user is not able to finish the puzzle.

![](https://i.imgur.com/8khtyxX.png)

There are two different types of numbers that are generated on the board: Bolded blue numbers, and regular font numbers. The regular font numbers are the numbers that are generated in place upon the board depending on the users selection of difficulty from the main page of the game. The bolded blue numbers are the numbers that are always placed on the board to allow the players to be able to start the puzzle and are integral to the specific solution of the puzzle. 

### Score

The User's Score is calculated according to the time it takes the user to submit all correct entries of the puzzle. The score is calculated as follows:  
10000 - (10t),
Where t is the time taken to complete the game, in seconds.  

### Difficulty

Difficulty is assessed in levels, with level one having a greater number of tiles filled in to allow quicker and easier solution of the puzzle.

Game board generated at the easiest difficulty:

![](https://imgur.com/TlJUFLy.png)

There are 16 non-bolded numbers at the easiest difficulty, allowing players to gain an advantage to make the game easier. 

Game board generated at the hardest difficulty: 

![](https://imgur.com/mD9hIKp.png)

There are only 3 non-bolded numbers at the hardest difficulty, creating a harder challenge for players who are adept at puzzles and would enjoy higher difficulties.

### Submitting table
 
To submit a table, user must enter all values for empty tiles on the game board and make sure that all the tiles are filled. This is an example of a filled game board:

![](https://imgur.com/XAB6AmW.png)


 
Once the user enters all values for the game board, they must be correct or you will be met with this prompt:

![](https://imgur.com/bGmtyl4.png)


Once you submit all the correct values for the game board, it will take you to the leaderboard page where it will display your score and prompt you to enter your username to display your score on the leaderboard. 

![](https://imgur.com/XAB6AmW.png)

![](https://imgur.com/A1LJJGg.png)

### Submitting score to leaderboard
 
To submit score, you must submit a complete and correct solution to the puzzle, the program will then prompt the user to enter the name to the leaderboard beside your score. 

![](https://imgur.com/l0JAyv5.png)
 
Usernames for scores on the leaderboard must be three characters long.

### Giving up
The give up button allows users to essentially stop playing and display the solutions to the user, the solutions are displayed in a prompt. 

![](https://imgur.com/qkt8L5C.png)

This allows players to solve the puzzle, however, it will lock out the use of the submit button, as the solution has been displayed already. 

![](https://imgur.com/MUTSshX.png)


  
