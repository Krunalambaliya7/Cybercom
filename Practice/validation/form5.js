function validation1() {

var email = document.getElementById('email').value;
var password = document.getElementById('password').value;

if (email == "") {
	document.getElementById('mail').innerHTML = "Please enter email";
	return false;
}
else if (password == "") {
	document.getElementById('pass').innerHTML = "Please enter password";
	return false;
}

}