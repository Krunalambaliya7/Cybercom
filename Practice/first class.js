var age = [5,9,6,3,8,7,2,3]; //in years

//parent function
function arrcal(arr , fn) {
	 var result = [];
	 for(var i=0;i<arr.length;i++)
	 {
	 result.push(fn(arr[i]));
	 }
	 return result;
}

//child function
function cal(ele)
{
	return (2020-ele);
}

var birth_year = arrcal(age , cal);

console.log(birth_year);