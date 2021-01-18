/*

//Arrow Function
const years = [1990, 1965, 1982, 1937];

//ES 5
var age_5 = years.map(function(el) {
	return 2021 - el;
});//map method is use for arrays.
console.log(age_5);

//ES 6
let age_6 = years.map(el => 2021-el);  //Using arrow operator.
console.log(age_6); 

age_6 = years.map((el,index) => `Age element ${index + 1}: ${2021 - el}.`);
console.log(age_6);
*/

//Destructing

const [name,age] = ['Mike', 23];
console.log(name);
console.log(age);

const obj = {
	firstname: 'john',
	lastname: 'smith'
};

const{firstname,lastname} = obj;
console.log(firstname);
console.log(lastname);