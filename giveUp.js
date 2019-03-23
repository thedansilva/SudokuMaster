function giveUp() {
  //  var inputs = document.getElementById("form").getElementsByTagName("input");
  //  var inputs = document.querySelectorAll('input[type="number"]');
    var answer = document.getElementById('answer').innerHTML;
    var key = answer.split(" "); // arrayify answer by delimiting spaces
    document.getElementById("submitButton").disabled = true;
    var keyAlert = "";
    var y, x, j = 0;
    for(x = 0; x < 9; x++) {
    for(y = 0; y < 9; y++) {
      keyAlert += key[j] + " ";
      j++;
    }
    keyAlert += "\n";
  }
  alert(keyAlert);
}
