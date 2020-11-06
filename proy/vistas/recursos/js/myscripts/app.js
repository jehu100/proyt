with(document.encomienda){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
	

		if(ok && Rci.value == Eci.value){
			ok=false;
			alert("No se puede enviar al mismo ci");
			Eci.focus();
		}


		if(ok){ submit(); }
	}
}
