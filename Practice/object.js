//Constractor or General object
/*var person = function(name,year_of_birth,job) {
	this.name = name;
	this.year_of_birth = year_of_birth;
	this.job = job;
	this.age = function(){
		console.log(this.name+"'s age:"+(2020 - this.year_of_birth));
	}
}*/

//using prototype;
/*person.prototype.age = function(){
		console.log(this.name+"'s age:"+(2020 - this.year_of_birth));
	}*/


/*
var a = new person('Krunal' , 2000 , 'Engineer');
var b = new person('Mike' , 1993 , 'cook');

a.age();
b.age();*/

//Creating objects using object.create method

var person =  {
	age: function(){
		console.log(this.name+"'s age:"+(2020 - this.year_of_birth));
	}
}

var a = Object.create(person); 
a.name = 'Krunal';
a.year_of_birth = 2000;
a.job = 'Engineer';


var b = Object.create(person,{
	name: {value:'Mike'},
	year_of_birth: {value:1993},
	job: {value:'cook'}
});

a.age();
b.age();