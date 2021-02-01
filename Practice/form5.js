function validation1() {

var email = document.getElementById('email').value;
var password = document.getElementById('password').value;

if (email.trim().length==0 || password.trim().length==0) {
	alert('All fileds are requried.');
}
}