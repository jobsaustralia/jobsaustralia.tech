function showDeleteConfirmation(){
	document.getElementById("confirm-delete-prompt").style.display = "block";
}

if(document.getElementById("confirm-delete") !== null){
	document.getElementById("confirm-delete").addEventListener("click", showDeleteConfirmation);
}
