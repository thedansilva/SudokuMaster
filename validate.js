function validate() {
  //  var inputs = document.getElementById("form").getElementsByTagName("input");
    var inputs = document.querySelectorAll('input[type="number"]');
    var answer = document.getElementById('answer').innerHTML;
    var key = answer.split(" "); // arrayify answer by delimiting spaces

    for(var x = 0; x<80; x++) {
      if (inputs[x].value == "") {
     alert("Please fill in all empty values.");
     return false;
   } else if (inputs[x].value < 1 || inputs[x].value > 9)  {
       alert("Please fill in only VALID values.");
       return false;
     }else if(inputs[x].value != key[x]) {
       alert("WRONG");
       return false;
     }
  }
      alert("SOLVED");
}
