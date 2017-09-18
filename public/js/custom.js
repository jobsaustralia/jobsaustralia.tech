/* Generic function to toggle the display of an element. */
function toggleDisplay(){
    var element = document.getElementById(event.target.id + "-content");
    
    if(element.style.display == "none"){
        element.style.display = "block";
    }
    else{
        element.style.display = "none";
    }
}

/* Function to toggle the display of each team member on the about page. */
function toggleTeamDisplay(){
    document.getElementById("kim-content").style.display = "none";
    document.getElementById("aaron-content").style.display = "none";
    document.getElementById("melissa-content").style.display = "none";
    document.getElementById("ozlem-content").style.display = "none";
    document.getElementById("dennis-content").style.display = "none";
    document.getElementById(event.target.id + "-content").style.display = "block";
}

/* Function to randomise the order of the team on the about page. */
function randomiseTeam(){
    /* https://stackoverflow.com/a/6274381 */
    function shuffle(a){
        var j, x, i;
        for (i = a.length; i; i--) {
            j = Math.floor(Math.random() * i);
            x = a[i - 1];
            a[i - 1] = a[j];
            a[j] = x;
        }
    }

    var team = ["dennis,Dennis Mihalache", "kim,Kim Luu", "aaron,Aaron Horler", "ozlem,Ozlem Kirmizi", "melissa,Melissa Nguyen"];
    shuffle(team);

    var namesDiv = document.getElementById("names");

    var i;
    for(i = 0; i < team.length; i++){
        var button = document.createElement("button");
        button.id = team[i].split(",")[0];
        button.className = "btn btn-primary";
        button.style.marginTop = "5px";
        button.style.marginBottom = "5px";
        button.innerHTML = team[i].split(",")[1];
        namesDiv.appendChild(button);
        namesDiv.innerHTML += " ";
    }

    document.getElementById(team[0].split(",")[0] + "-content").style.display = "block";

    document.getElementById("kim").addEventListener("click", toggleTeamDisplay);
    document.getElementById("melissa").addEventListener("click", toggleTeamDisplay);
    document.getElementById("ozlem").addEventListener("click", toggleTeamDisplay);
    document.getElementById("dennis").addEventListener("click", toggleTeamDisplay);
    document.getElementById("aaron").addEventListener("click", toggleTeamDisplay);
}

/* Function to automatically populate relevant fields when student checkbox is checked on registration page. */
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

/* Function to submit POST data to server with form in the background. */
function submitForm(){
    event.preventDefault();
    document.getElementById(event.target.id + "-form").submit();
}

/* Add EventListeners depending on current page loaded. */
if(document.getElementById("profile") !== null){
    document.getElementById("confirm-delete").addEventListener("click", toggleDisplay);
    document.getElementById("really-confirm-delete").addEventListener("click", toggleDisplay);
    document.getElementById("change-password").addEventListener("click", toggleDisplay);
    document.getElementById("logout").addEventListener("click", submitForm);
    document.getElementById("delete").addEventListener("click", submitForm);

    if(document.getElementById("delete-resume") !== null){
        document.getElementById("delete-resume").addEventListener("click", submitForm);
    }
}
else if(document.getElementById("register") !== null){
    document.getElementById("student").addEventListener("change", studentFill);
}
else if(document.getElementById("team") !== null){
    document.addEventListener('DOMContentLoaded', randomiseTeam);
}
else if(document.getElementById("job") !== null){
    document.getElementById("apply").addEventListener("click", toggleDisplay);
}
