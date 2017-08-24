function showDeleteConfirmation(){
	if(document.getElementById("confirm-delete-prompt").style.display == "none"){
		document.getElementById("confirm-delete-prompt").style.display = "block";
	}
	else{
		document.getElementById("confirm-delete-prompt").style.display = "none";
	}
	
}

function showChangePasswordMessage(){
	if(document.getElementById("change-password-message").style.display == "none"){
		document.getElementById("change-password-message").style.display = "block";
	}
	else{
		document.getElementById("change-password-message").style.display = "none";
	}
}

if(document.getElementById("confirm-delete") !== null){
	document.getElementById("confirm-delete").addEventListener("click", showDeleteConfirmation);
}

if(document.getElementById("change-password") !== null){
	document.getElementById("change-password").addEventListener("click", showChangePasswordMessage);
}
