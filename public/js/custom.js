function toggleDisplay(){
    var element = document.getElementById(event.target.id + "-content");
    
    if(element.style.display == "none"){
        element.style.display = "block";
    }
    else{
        element.style.display = "none";
    }
}

function studentFill(){
    if(document.getElementById("student").checked){
        document.getElementById("title").value = "Student";
        document.getElementById("title").readOnly = true;
        document.getElementById("sector").value = "None";
        document.getElementById("sector").readOnly = true;
        document.getElementById("experience").value = 0;
    }
    else{
        document.getElementById("title").value = null;
        document.getElementById("title").readOnly = false;
        document.getElementById("sector").value = null;
        document.getElementById("sector").readOnly = false;
        document.getElementById("experience").value = null;
    }
}

if(document.getElementById("profile") !== null){
    document.getElementById("confirm-delete").addEventListener("click", toggleDisplay);
    document.getElementById("change-password").addEventListener("click", toggleDisplay);
}
else if(document.getElementById("register") !== null){
    document.getElementById("student").addEventListener("change", studentFill);
}
else if(document.getElementById("team") !== null){
    document.getElementById("aaron").addEventListener("click", toggleDisplay);
    document.getElementById("ozlem").addEventListener("click", toggleDisplay);
    document.getElementById("melissa").addEventListener("click", toggleDisplay);
    document.getElementById("kim").addEventListener("click", toggleDisplay);
    document.getElementById("dennis").addEventListener("click", toggleDisplay);
}
