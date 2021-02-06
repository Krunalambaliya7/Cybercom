function add(){
var arr = [];
var constructor_ = function (name,email,password,city,state) {
	this.name = name;
	this.email = email;
	this.password = password;
	this.city = city;
	this.state = state;
};
	var name = document.getElementById('name').value.trim();
	var email = document.getElementById('email').value.trim();
	var password = document.getElementById('password').value.trim();
	var confirmPassword = document.getElementById('confirmPassword').value.trim();
	var city = document.getElementById('city').value.trim();
	var state = document.getElementById('state').value.trim();

	if (password == confirmPassword) 
	{
		if (localStorage.getItem('data'))
		{
			arr = JSON.parse(localStorage.getItem('data'));
		}
			var obj = new constructor_(name,email,password,city,state);
			arr.push(obj);
			localStorage.setItem('data',JSON.stringify(arr));
			window.location.replace('login.html');
	}
	else
	{
		alert('password and confirm Password is not same');
	}
}

function check()
{
	var email = document.getElementById('email').value.trim();
	var password = document.getElementById('password').value.trim();

	var admin = JSON.parse(localStorage.getItem('data'));
	var user = JSON.parse(localStorage.getItem('user_data'));
 
	for(var i=0 ; i<admin.length ; i++)
	{
		if(admin[i]['email'].trim() === email)
		{
			alert("Admin login");
			break;
		}
		else if(user[i]['email'].trim() === email)
		{
			alert("User login");
		}
		else
		{
			alert("Registration first");
		}
	}
}