
function validation() {
var valid = false; 
var name = document.getElementById('name').value;
var password = document.getElementById('password').value;
var address = document.getElementById('text').value;
var age = document.getElementById('age').value;
var file = document.getElementById('file').value;
var gender = get_val('gender');
var game = get_val('game[]');




  

  if (name == "") {
    document.getElementById('s_name').innerHTML = "Please fill the name field.";
    return false;
  }
  if (password == "") {
    document.getElementById('s_password').innerHTML = "Please fill the Password field.";
    return false;
  }
  if (address == "") {
    document.getElementById('s_address').innerHTML = "Please fill the address field.";
    return false;
  }
  if (file == "") {
    document.getElementById('s_file').innerHTML = "Please select the file.";
    return false;
  }
  if (gender == "") {
    document.getElementById('s_gender').innerHTML = "Please select gender.";
    return false;
  }
  if (age.trim().length == 0) {
    document.getElementById('s_age').innerHTML = "Please select age.";
    return false;
  }

  if (game.trim().length == 0) {
    document.getElementById('s_game').innerHTML = "Please select atlest one.";
    return false;
  }
  


}

function get_val(value)
{
  var return_str = '';
  var ele = document.getElementsByName(value);
  for (var i = 0 ; i < ele.length ; i++){
    if (ele[i].checked) {
      return_str+=ele[i].value+"\n";
    }
    console.log(return_str);
    return return_str;
  }
}