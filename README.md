# SudokuMaster
SudokuMaster is a web based application that allows users to enjoy the mind testing game of Sudoku. This application features a variety of unique puzzles, each with a range of difficulties that can help any user learn and master this game. 

### Requirements
- Wamp server
- Browser
- Primary input devices

### What is Sudoku?
Sudoku is a logic based, number based puzzle. 

### Rules of Sudoku
The objective of the game is to fill a 9×9 grid with digits so that each column, each row, and each of the nine 3×3 subgrids that compose the grid obtain all of the digits from 1 to 9. 

### Getting Started
The first page of the application you will see is a menu page that will ask you to select level and difficulty (both with a scale ranging from 1 to 10) so that each puzzle can be tailored to the users specific needs. 

This first page also includes both an 'about' and 'contact us' button for any questions and(or) future reccomendations for the creators. Any comments will be considered for future patches and updates this application may have.

![](https://imgur.com/ZqI7PKI.jpg) 

### Setting up the game
1. Open index.php on a locally hosted server (WAMP, etc).
2. Navigate to the "level" and "difficulty" selection.
3. Once the game difficulty and level are specified, the user is able to "create new game".
4. The game board now appears and SudokuMaster may be played.

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
(how the user submits the table)  
(what happens if they're wrong)  
(what happens if they're correct i.e leads to leaderboard.php with their score etc)  

### Submitting score to leaderboard
(how the user submits their score)  
(limitations on name)  

### Giving up
(how the user gives up)  
(how the game shows them they've given up)  
(what happens after i.e submit button disabled)  
