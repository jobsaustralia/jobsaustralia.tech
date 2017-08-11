function showDeleteConfirmation(){
	document.getElementById("confirm-delete-prompt").style.display = "block";
}

document.getElementById("confirm-delete").addEventListener("click", showDeleteConfirmation);
