var john = [124, 48, 268 ];

//Function for calculate tip

function tip_calculator(tip) 
{
	if(tip < 50)
	{
		return(tip * 0.2);
	}
	else if(50 < tip < 200)
	{
		return(tip * 0.15);
	}
	else
	{
		return(tip * 0.1);
	}	
}

//Tips array to store values of tip

var tips = new Array(3);

for (var i=0; i<john.length; i++)
{
	tips[i] = tip_calculator(john[i]);
}

//Array for store total spende money

var total = new Array(3);

for (var i=0; i<john.length; i++)
{
	total[i]=tips[i]+john[i];
	console.log(total[i]);
}