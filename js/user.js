function addUser()
{
var data = [];
var constructor_ = function (name,email,password,date)
{
	this.name = name;
	this.email = email;
	this.password = password;
	this.date = date;
};
	var name = document.getElementById('name').value.trim();
	var email = document.getElementById('email').value.trim();
	var password = document.getElementById('password').value.trim();
	var date = document.getElementById('date').value.trim();
	var d = new Date(date);
		if (localStorage.getItem('user_data'))
		{
			data = JSON.parse(localStorage.getItem('user_data'));
		}
			var obj = new constructor_(name,email,password,date);
			data.push(obj);
			localStorage.setItem('user_data',JSON.stringify(data));
			window.location.reload('user.html');
}

function view()
{	
	var data = JSON.parse(localStorage.getItem("user_data"));
	var table=document.getElementById('table');
	for(var i=0 ; i < data.length ; i++)
	{
		
		var node = document.createElement("TR"); 

		var dom = document.createElement("TD");
		dom.innerHTML = data[i].name;

		var dom1 = document.createElement("TD");
		dom1.innerHTML = data[i].email;

		var dom2 = document.createElement("TD");
		dom2.innerHTML = data[i].password;

		var dom3 = document.createElement("TD");
		dom3.innerHTML = data[i].date;

		var dom4 = document.createElement("TD");
		var d = new Date(data[i].date);
		dom4.innerHTML = (2021-(d.getFullYear()));

		var dom5 = document.createElement("TD");
		dom5.innerHTML = '<a href="edit.html">Edit</a>  <a href="del.html">Delete</a>';
		   

		node.appendChild(dom);
		node.appendChild(dom1); 
		node.appendChild(dom2);
		node.appendChild(dom3); 
		node.appendChild(dom4);
		node.appendChild(dom5);

		table.appendChild(node);     
	}
}

	
