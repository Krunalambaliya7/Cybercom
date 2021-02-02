function val() {
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var subject = document.getElementById('subject').value;
	var message = document.getElementById('message').value;

	if (name == "") {
		document.getElementById('s_name').innerHTML = "Please enter name";
		return false;
	}
	else if (email == "") {
		document.getElementById('mail').innerHTML = "Please enter email";
		return false;
	}
	else if (subject == "") {
		document.getElementById('sub').innerHTML = "Please enter subject";
		return false;
	}
	else if (message == "") {
		document.getElementById('msg').innerHTML = "Please enter message";
		return false;
	}
	else{
		console.log("Error");
	}

}