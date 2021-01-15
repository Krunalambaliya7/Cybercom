var a=0,b=1;

function fibo()
{
	var c;
	var n=10;

	for(var i=0 ; i<= n-2 ; i++)
	{
		c=a+b;
		document.getElementById('p').innerHtml = document.write(c+" ");

		a=b;
		b=c;
	}
}

document.getElementById('p').innerHtml = document.write(a+" ");
fibo();