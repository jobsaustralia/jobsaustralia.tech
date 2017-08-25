function toggleDisplay(){
	var element = document.getElementById(event.target.id + "-content");
	
	if(element.style.display == "none"){
		element.style.display = "block";
	}
	else{
		element.style.display = "none";
	}
}

if(document.getElementById("profile") !== null){
	document.getElementById("confirm-delete").addEventListener("click", toggleDisplay);
	document.getElementById("change-password").addEventListener("click", toggleDisplay);
}
else if(document.getElementById("team") !== null){
	document.getElementById("aaron").addEventListener("click", toggleDisplay);
	document.getElementById("ozlem").addEventListener("click", toggleDisplay);
	document.getElementById("melissa").addEventListener("click", toggleDisplay);
	document.getElementById("kim").addEventListener("click", toggleDisplay);
	document.getElementById("dennis").addEventListener("click", toggleDisplay);
}
