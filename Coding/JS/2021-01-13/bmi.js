//Detail of john

var obj1 = {
	name: 'John',
	mass: 70,
	height: 2, 
	bmi: function() {
		return(obj1.mass/(obj1.height*obj1.height));
	}
}

//Detail of mark

var obj2 = {
	name: 'Mark',
	mass: 60,
	height: 2, 
	bmi: function() {
		return(obj2.mass/(obj2.height*obj2.height));
	}
}

if (obj1.bmi() > obj2.bmi()) {
	console.log(obj1.name+"'s"+" "+"BMI is heigher and BMI is"+" "+obj1.bmi());
}
else if (obj2.bmi() > obj1.bmi()) {
	console.log(obj2.name+"'s"+" "+"BMI is heigher and BMI is"+" "+obj2.bmi());
}
else
{
	console.log("BMI of "+obj1.name+" and "+obj2.name+" is same.");
}