/* Generic function to toggle the display of an element. */
function toggleDisplay(event){
    event.preventDefault();

    var element = document.getElementById(event.target.id + "-content");
    
    if(element.style.display == "block"){
        element.style.display = "none";
    }
    else{
        element.style.display = "block";
    }
}

/* Function to toggle the display of each team member on the about page. */
function toggleTeamDisplay(event){
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
        for(i = a.length; i; i--){
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
    if(this.checked){
        document.getElementById("title").value = "Student";
        document.getElementById("sector").value = "None";
        document.getElementById("experience").value = 0;
    }
}

/* Function to submit POST data to server with form in the background. */
function submitForm(event){
    event.preventDefault();
    document.getElementById(event.target.id + "-form").submit();
}

/* Function to autofill skills from GitHub. */
function autoFill(event){
    event.preventDefault();

    document.getElementById("github-error-generic").style.display = "none";
    document.getElementById("github-error-username").style.display = "none";

    /* Get GitHub username from document. */
    var username = document.getElementById("github").value;

    if(username !== "" && username !== null){
        $("#autofill-btn").attr("disabled", true);

        var resource = "https://api.github.com/users/" + username + "/repos";
        
        $.getJSON(resource, function(data){
            var i;
            for(i = 0; i < data.length; i++){

                /* Ignore repositories with no recognised language, and ignore forks. */
                if(data[i].language !== null && data[i].fork == false){

                    /* Compare language in API, and check boxes accordingly. */
                    if(data[i].language == "Java"){
                        document.getElementById("java").checked = true;
                    }
                    else if(data[i].language == "Python"){
                        document.getElementById("python").checked = true;
                    }
                    else if(data[i].language == "C"){
                        document.getElementById("c").checked = true;
                    }
                    else if(data[i].language == "C#"){
                        document.getElementById("csharp").checked = true;
                    }
                    else if(data[i].language == "C++"){
                        document.getElementById("cplus").checked = true;
                    }
                    else if(data[i].language == "PHP"){
                        document.getElementById("php").checked = true;
                    }
                    else if(data[i].language == "HTML"){
                        document.getElementById("html").checked = true;
                    }
                    else if(data[i].language == "CSS"){
                        document.getElementById("css").checked = true;
                    }
                    else if(data[i].language == "JavaScript"){
                        document.getElementById("javascript").checked = true;
                    }
                    else if(data[i].language == "SQL"){
                        document.getElementById("sql").checked = true;
                    }
                    else if(data[i].language == "Shell"){
                        document.getElementById("bash").checked = true;
                    }
                    else if(data[i].language == "Batchfile"){
                        document.getElementById("batch").checked = true;
                    }
                    else if(data[i].language == "R"){
                        document.getElementById("r").checked = true;
                    }
                    else if(data[i].language == "Go"){
                        document.getElementById("go").checked = true;
                    }
                    else if(data[i].language == "Ruby"){
                        document.getElementById("ruby").checked = true;
                    }
                    else if(data[i].language == "Scala"){
                        document.getElementById("scala").checked = true;
                    }
                }
            }
        })
        .then(function(){
            $("#autofill-btn").attr("disabled", false);
        })
        .fail(function(){
            $("#autofill-btn").attr("disabled", false);
            document.getElementById("github-error-generic").style.display = "block";
        });
    }
    else{
        $("#autofill-btn").attr("disabled", false);
        document.getElementById("github-error-username").style.display = "block";
    }
}

/* Function to (roughly) get the users location by their IP address using an external resource. */
function getLocationByIP(){
    /* Respect do-not-track setting. */
    if(navigator.doNotTrack !== "1"){

        /* This resource (freegeoip.net) may be blocked by some ad blocking and privacy software. In such a case, this will silently fail. */
        var resource = "https://freegeoip.net/json/";

        $.getJSON(resource, function(location){
            /* Only autofill if country is detected as Australia. */
            if(location.country_code == "AU"){
                document.getElementById("state").value = location.region_code.toLowerCase();
                document.getElementById("city").value = location.city;
            }
        });
    }
}

/* Moo. */
function moo(){
    if(this.checked){
        var audio = new Audio('/audio/moo.opus');
        audio.play();
    }
}

/* Add EventListeners depending on current page loaded. */
if(document.getElementById("profile") !== null){
    document.getElementById("confirm-delete").addEventListener("click", toggleDisplay);
    document.getElementById("really-confirm-delete").addEventListener("click", toggleDisplay);
    document.getElementById("change-password").addEventListener("click", toggleDisplay);
    document.getElementById("delete").addEventListener("click", submitForm);

    if(document.getElementById("delete-resume") !== null){
        document.getElementById("delete-resume").addEventListener("click", submitForm);
    }
}
else if(document.getElementById("register") !== null){
    document.getElementById("student").addEventListener("change", studentFill);
    document.getElementById("autofill-btn").addEventListener("click", autoFill);
    document.getElementById("cow").addEventListener("change", moo);
    document.addEventListener('DOMContentLoaded', getLocationByIP);
}
else if(document.getElementById("edit-profile") !== null){
    document.getElementById("autofill-btn").addEventListener("click", autoFill);
    document.getElementById("cow").addEventListener("change", moo);
}
else if(document.getElementById("team") !== null){
    document.addEventListener('DOMContentLoaded', randomiseTeam);
}
else if(document.getElementById("job") !== null){
    document.getElementById("apply").addEventListener("click", toggleDisplay);
}
else if(document.getElementById("delete-application") !== null){
    document.getElementById("delete-application-button").addEventListener("click", toggleDisplay);
    document.getElementById("delete-application-confirm").addEventListener("click", submitForm);
}

/* Add EventListener to logout link. */
if(document.getElementById("logout") !== null){
    document.getElementById("logout").addEventListener("click", submitForm);
}
