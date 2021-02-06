function view()
{	
	var data = JSON.parse(localStorage.getItem("userName"));
	var table=document.getElementById('table');
	for(var i=0 ; i < data.length ; i++)
	{
		
		var node = document.createElement("TR"); 

		var dom = document.createElement("TD");
		dom.innerHTML = data[i].name;

		var dom1 = document.createElement("TD");
		dom1.innerHTML = data[i].date;
		 
		var dom2 = document.createElement("TD");   
		dom2.innerHTML = data[i].outDate;
		node.appendChild(dom);
		node.appendChild(dom1); 
		node.appendChild(dom2);

		table.appendChild(node);     
	}
}