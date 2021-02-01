
function validation1() {
var name = document.getElementById('name').value;
var password = document.getElementById('password').value;
var address = document.getElementById('text').value;
var age = document.getElementById('age').value;
var file = document.getElementById('file').value;
var game = get_val('game[]');
var gender = get_val('gender');

function get_val(value)
{
  var return_str = '';
  var ele = document.getElementsByName(value);
  for (var i = 0 ; i < ele.length ; i++){
    if (ele[i].checked) {
      return_str+=ele[i].value+"\n";
    }
    return return_str;
  }
}


if (name.trim().length == 0 || password.trim().length == 0 || address.trim().length == 0 
	|| age.trim().length == 0 || file.trim().length == 0 || gender.trim().length == 0 || 
	game.trim().length == 0){
	alert("Please fill all fields.");
	return false;
}
else{
	return true;
}
}
