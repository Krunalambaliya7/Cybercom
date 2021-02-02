function numb() {
  			var dom = document.getElementById('op1');
  			var dom1 = document.getElementById('op2');
  			for(var i=1; i<=31; i++){
  				var nord = document.createElement("option");
  				nord.value = (i);
  				nord.innerHTML = (i);
  				dom.appendChild(nord);
  			}
  			for(var i=1990; i<=2021; i++){
  				var nord1 = document.createElement("option");
  				nord1.value = (i);
  				nord1.innerHTML = (i);
  				dom1.appendChild(nord1);
  			}
}


function val() {
var name = document.getElementById('name').value;
var password = document.getElementById('password').value;
var address = document.getElementById('text').value;
var marital = get_val('marital');
var game = get_val('game[]');
var gender = get_val('gender');
var month = document.getElementById('dob_month').value;
var date = document.getElementById('op1').value;
var year = document.getElementById('op2').value;
var accept = get_val('accept');
console.log(accept);


if (name == "") {
    document.getElementById('firstname').innerHTML = "Please fill the name field.";
    return false;
  }
else if (password == "") {
    document.getElementById('pass').innerHTML = "Please fill the Password field.";
    return false;
  }
  else if (gender == "") {
    document.getElementById('s_gender').innerHTML = "Please select gender.";
    return false;
  }
  else if (address == "") {
    document.getElementById('address').innerHTML = "Please fill the address field.";
    return false;
  }
  else if (month == "") {
    document.getElementById('date').innerHTML = "Please select month.";
    return false;
  }
  else if (date == "") {
    document.getElementById('date').innerHTML = "Please select date.";
    return false;
  }
  else if (year == "") {
    document.getElementById('date').innerHTML = "Please select year.";
    return false;
  }
 else if (game.trim().length == 0) {
    document.getElementById('s_game').innerHTML = "select atleast one.";
  }
  else if (marital == "") {
    document.getElementById('status').innerHTML = "Please select this.";
    return false;
  }
 else if (accept.trim().length == 0) {
    document.getElementById('box').innerHTML = "Please check checkbox";
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
    return return_str;
  }
}