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
var name = document.getElementById('name').value;
var password = document.getElementById('password').value;
var address = document.getElementById('text').value;
var marital = get_val('marital');
var game = get_val('game[]');
var gender = get_val('gender');
var month = document.getElementById('dob_month').value;
var date = document.getElementById('op1').value;
var year = document.getElementById('op2').value;

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
  || month.trim().length == 0 || date.trim().length == 0 || year.trim().length == 0 ||
   gender.trim().length == 0 || marital.trim().length == 0 || game.trim().length == 0){
    
  alert("Please fill all fields.");

}
}
