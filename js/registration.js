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
	var arr = [];
	var email = document.getElementById('email').value.trim();
	var password = document.getElementById('password').value.trim();

	var admin = JSON.parse(localStorage.getItem('data'));
	var user = JSON.parse(localStorage.getItem('user_data'));
 
	for(var i=0 ;  i < user.length; i++)
	{
		if(admin[i]['email'].trim() === email.trim())
		{
			sessionStorage.setItem("adminName", admin[i]['name']);
			alert("Admin login");
			window.location.replace('navigation.html');
			break;
		}
		else if(user[i]['email'].trim() === email.trim())
		{
			var object = function(name,date) {
				this.name = name;
				this.date = date;
			}
			if (localStorage.getItem('userName'))
			{
				arr = JSON.parse(localStorage.getItem('userName'));
			}
			var date = new Date();
			var obj = new object(user[i]['name'],date); 
			arr.push(obj);
			sessionStorage.setItem("user", user[i]['name']);
			localStorage.setItem("userName", JSON.stringify(arr));
			alert("User login");
			window.location.replace('sub_navigation.html');
		}
		else
		{
			alert("Registration first");
		}
	}
}