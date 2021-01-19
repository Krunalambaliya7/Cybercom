function numb() {
  			var dom = document.getElementById('op1');
  			var dom1 = document.getElementById('op2');
  			for(var i=1; i<=31; i++){
  				var nord = document.createElement("option");
  				nord.value = (i);
  				nord.innerHTML = (i);
  				dom.appendChild(nord);
  			}
  			for(var i=1990; i<=2021; i++){
  				var nord1 = document.createElement("option");
  				nord1.value = (i);
  				nord1.innerHTML = (i);
  				dom1.appendChild(nord1);
  			}
  		}