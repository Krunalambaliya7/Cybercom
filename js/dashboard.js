var user = JSON.parse(localStorage.getItem('user_data'));
var div1 = 0;
var div2 = 0;
var div3 = 0;

function display_age()
{
	for(var i=0 ; i < user.length ; i++)
	{
		var d = new Date(user[i]['date']);
		var age = (2021 - d.getFullYear());

		if(age < 18)
		{
			div1++;
		}
		else if (18 < age < 50)
		{
			div2++;
		}
		else if(age > 50)
		{
			div3++;
		}
	}

	document.getElementById('18years').innerHTML = div1;
	document.getElementById('18-50years').innerHTML = div2;
	document.getElementById('50years').innerHTML = div3;
	var today = new Date();
	for(var i = 0 ; i < user.length ; i++)
	{
		var birth = new Date(user[i]['date']);
		if(today.getDate() === birth.getDate() && today.getMonth() === birth.getMonth())
		{
			document.getElementById('birthday').innerHTML = "Today "+user[i]['name']+"'s birthday";
		}	
	}
}
function admin_()
{
	var str = 'Hello '+sessionStorage.getItem("adminName");;
	document.getElementById('str').innerHTML = str;
}
function user_() {
	var arr = sessionStorage.getItem("userName");
	var str = 'Hello '+arr['name'];
	document.getElementById('str').innerHTML = str;
}
