function registration()
{
	var password = document.getElementById('password').value.trim();
	var confirmpassword = document.getElementById('confirmpassword').value.trim();
	var phone = document.getElementById('phonenumber').value.trim();	

	if (password != confirmpassword) {
		document.getElementById('error').innerHTML = "password and confirm password is no same";
	}
	else if (phone.length != 10) {
		document.getElementById('erro').innerHTML = "Pho number must be in 10 digit";
	}
	return false;
}
function deletedata(val) {
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200) {
			if(this.responseText === 'Data deleted successfully') {
				window.location.replace('contacts.php');
			}
		}
	}
	xhttp.open('GET','model/deleteContact.php?id='+val,true);
	xhttp.send();
}