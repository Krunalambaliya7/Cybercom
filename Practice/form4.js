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

function validation1() {
var firstname = document.getElementById('firstname').value;
var lastname = document.getElementById('lastname').value;
var email = document.getElementById('email').value;
var year = document.getElementById('op2').value;
var day = document.getElementById('op1').value;
var month = document.getElementById('dob_month').value;
var phone = document.getElementById('phone').value;
var password = document.getElementById('password').value;
var confirm_password = document.getElementById('confirm_password').value;
var gender = get_val(gender); 

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




if (firstname.trim().length == 0 || lastname.trim().length == 0 || email.trim().length == 0 || gender.trim().length == 0 
	|| password.trim().length == 0 || confirm_password.trim().length == 0 || day.trim().length == 0 || month.trim().length == 0 || year.trim().length == 0 ){
	alert("Please fill all fields.");
	return false;

}
else if ($password =! $confirm_password) {
	alert("Both password is not same.")
	return false;
}
else{
	return true;
}
}