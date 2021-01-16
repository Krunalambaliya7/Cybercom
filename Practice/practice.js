
//First class returning to the function
function grad(marks) {
	if (marks < 33) {
		return function(name){
			console.log(name+" is Fail");
		}
	}
	else{
		return function(name){
			console.log(name+" is Pass.");
		}
	}
}

var stud_1 = grad(100);
stud_1('Krunal'); //return function.

grad(10)('Meet'); //First arg is for the main function and second is for the returning function.





//Immediately Invoked Function Expressions (IIFE)

(function random_num() {
	var x = Math.random();
	console.log(x);
}
)();

//console.log(x);// we can not use variable x outside the function becsuse IIFE is provide data privacy.





//Closures
function grad(marks) {
	var a = 'is Fail';
	var b = 'is Pass';
	if (marks < 33) {
		return function(name){
			console.log(name+" "+a);
		}
	}
	else{
		return function(name){
			console.log(name+" "+b);
		}
	}
}

grad(92)('Krunal'); 
//Variable a and b is not the part of first function and it use in second function is called Closures.






//Bind , Call and Apply
var john = {
	name: 'john',
	age: 22,
	job:'Docter',
	information: function(style,timeofday){
		if (style === 'formal') {
			console.log("Good "+timeofday+" My name is "+this.name+" I am "+this.age+" years old.");
		}
		else if (style === 'friendly') {
			console.log("Hey there! Good "+timeofday+" My name is "+this.name+" I am "+this.age+" years old.");
		}
	}
}

john.information('formal','morning');

var krunal = {
	name: 'Krunal',
	age: 20,
	job:'Engineer'
}

john.information.call(krunal,'friendly','evening'); //call method
//Apply methods is use in the Arrays.

var friendly = john.information.bind(john,'formal'); //Bind method
friendly('afternoon');






//Var , Let and Const
function drivingLicence(passed) {
	if (passed) {
		var name = 'Krunal';
		var birthyear = 2000;
	}
	console.log(name+", born in "+birthyear+" passed the driving test.");
}

drivingLicence(true);//it not show error because var has function scoping.

function drivingLicence1(passed) {
	if (passed) {
		const name = 'Krunal';
		let birthyear = 2000;
	}
	console.log(name+", born in "+birthyear+" passed the driving test.");
}

drivingLicence1(true);//It sows error becaues let and const have box scoping.
