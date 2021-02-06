function view()
{
	var arr = [];
	var object = function(name,date,outDate) {
				this.name = name;
				this.date = date;
				this.outDate = outDate;
			}
			if (localStorage.getItem('userName'))
			{
				arr = JSON.parse(localStorage.getItem('userName'));
			}
			for(var i = 0 ; i < arr.length ; i++)
			{
			var date = new Date();
			var outDate = new Date();
			var obj = new object(arr[i]['name'],date,outDate); 
			arr.push(obj);

			localStorage.setItem("userName", JSON.stringify(arr));
			window.location.replace('login.html');
		}
