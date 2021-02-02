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
var gender = document.getElementById('gender').value;
var country = get_val('country'); 



  if (firstname == "") {
    document.getElementById('fname').innerHTML = "Please fill the name field.";
    return false;
  }
  else if (lastname == "") {
    document.getElementById('lname').innerHTML = "Please fill the name field.";
    return false;
  }
  else if (day == "") {
    document.getElementById('date').innerHTML = "Please fill the date.";
    return false;
  }
  else if (month == "") {
    document.getElementById('date').innerHTML = "Please fill the month.";
    return false;
  }
  else if (year == "") {
    document.getElementById('date').innerHTML = "Please fill the year.";
    return false;
  }
  else if (gender == 0) {
    document.getElementById('gen').innerHTML = "Please select gender.";
    return false;
  }
  else if (email == "") {
    document.getElementById('mail').innerHTML = "Please fill the E-mail field.";
    return false;
  }
  else if (phone == "") {
    document.getElementById('number').innerHTML = "Please fill the Phone number.";
    return false;
  }
  else if (password == "") {
    document.getElementById('pass').innerHTML = "Please fill the Password field.";
    return false;
  }
  else if (confirm_password == "") {
    document.getElementById('cpass').innerHTML = "Please fill the Password field.";
    return false;
  }
 else if (country.trim().length == 0) {
    document.getElementById('coun').innerHTML = "Please select country.";
    return false;
  }
  else{
    console.log('hello');
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

