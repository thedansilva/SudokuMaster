function addScore() {
  //  var inputs = document.getElementById("form").getElementsByTagName("input");
    var username = document.getElementById('username').value;
    if(username.length < 3) {
      alert("Please type a FULL inital (3 characters).");
      return false;
    }
    var tablegrab = document.getElementsByTagName('span');
    var userscore = document.getElementById('userscore').value;
    var level = document.getElementById('level').innerHTML;
    var scores = new Array(9);// there are NINE other names on the board
    var names = new Array(9); // excluding the user which we will add later
    var x = 0;
    for(x = 0; x < 9; x++) {
      names[x] = tablegrab[x * 2];
      scores[x] = tablegrab[(x * 2) + 1];
    }
    x = 0;
    var output = "";
    var position = 0;
    var scoreposted = false;
    for(x = 0; x < 9; x++) {
      if (userscore > parseInt(scores[x].innerHTML) && !scoreposted) {
        output += username + " " + userscore + " " + "\n";
        scoreposted = true;
      } else {
        output += names[position].innerHTML + " " + scores[position].innerHTML + " " + "\n";
        position++;
      }
    }
}
