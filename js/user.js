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
		dom5.innerHTML = '<a href="#" id="'+data[i]['email']+'"onclick="editSubUser_data(this.id);">'+'Edit'+'</a>' +
			' <a href="#" id="'+data[i]['email']+'"onclick="deleteSubUser_data(this.id);">'+'Delete'+'</a>';
		   

		node.appendChild(dom);
		node.appendChild(dom1); 
		node.appendChild(dom2);
		node.appendChild(dom3); 
		node.appendChild(dom4);
		node.appendChild(dom5);

		table.appendChild(node);     
	}
}
function getDataFromLocalStorage(keyName) {
	return JSON.parse(localStorage.getItem(keyName));
}
function setDataIntoLocalStorage(keyName,arrayName) {
	localStorage.setItem(keyName,JSON.stringify(arrayName));
}

function deleteSubUser_data(val) {
	var subUserEmail = val;
	if(localStorage.getItem("user_data") != null){ //if record is availbale in localstorage
		data = getDataFromLocalStorage("user_data");
		for (var i = 0; i < data.length; i++) {
			if(data[i]['email'] === subUserEmail) {
				data.splice(i,1);
				break;
			}
		}
		setDataIntoLocalStorage('user_data',data);
		window.location.replace("user.html");
	}
}

function editSubUser_data(val) {
	var subUserEmail = val;
	if(localStorage.getItem("user_data") != null){ //if record is availbale in localstorage
		data = getDataFromLocalStorage("user_data");
		for (var i = 0; i < data.length; i++) {
			if(data[i]['email'] === subUserEmail) {
				document.getElementById('name').value = data[i]['name'];
				document.getElementById('email').value = data[i]['email'];
				document.getElementById('password').value = data[i]['password'];
				document.getElementById('date').value = data[i]['date'];
				break;
			}
		}
		document.getElementById('adduser').innerHTML = 'Update User';
		document.getElementById('adduser').setAttribute("onclick", "updateSubUser_data(this.id)");
		document.getElementById('adduser').setAttribute("id",val);
		document.getElementById('email').setAttribute("readonly","true");
	}
}

function updateSubUser_data(val) {
	var subUserEmail = val;
	var username = document.getElementById('name').value.trim().toLowerCase();
	var password = document.getElementById('password').value.trim().toLowerCase();
	var dob = document.getElementById('date').value.trim().toLowerCase();
	if(localStorage.getItem("user_data") != null){ //if record is availbale in localstorage
		data = getDataFromLocalStorage("user_data");
		for (var i = 0; i < data.length; i++) {
			if(data[i]['email'] === subUserEmail) {
				data[i]['name'] = username;
				data[i]['password'] = password;
				data[i]['date'] = dob;
				break;
			}
		}
		setDataIntoLocalStorage('user_data',data);
		window.location.replace("user.html");
	}
}
	
