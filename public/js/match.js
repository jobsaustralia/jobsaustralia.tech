/* Function to print job to panel in view. */
function printJob(id, title, description, hours, rate, salary, startDate, state, city, employerName, employerId, percentageMatch){
    var display = document.getElementById("jobs");

    var panel = document.createElement("div");
    panel.className = "panel panel-default";

    var heading = document.createElement("div");
    heading.className = "panel-heading";
    heading.innerHTML += title + " &bull; ";

    var match = document.createElement("strong");
    match.innerHTML = percentageMatch + "&#37;";

    var body = document.createElement("div");
    body.className = "panel-body";

    var p1 = document.createElement("p");
    p1.innerHTML = description;

    var hr1 = document.createElement("hr");

    var p2 = document.createElement("p");
    var p2Title = document.createElement("strong");

    if(hours == "fulltime"){
        p2.innerHTML = "Full time";
    }
    else if(hours == "parttime"){
        p2.innerHTML = "Part time";
    }
    else{
        p2.innerHTML = "Casual";
    }

    p2Title.innerHTML = "Hours: ";

    var p3 = document.createElement("p");
    var p3Title = document.createElement("strong");

    /* https://stackoverflow.com/a/2901298 */
    p3.innerHTML = "&#36;" + salary.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    if(rate == "hourly"){
        p3.innerHTML += " per hour";
    }
    else if(rate == "weekly"){
        p3.innerHTML += " per week";
    }
    else if(rate == "fortnightly"){
        p3.innerHTML += " per fortnight";
    }
    else if(rate == "monthly"){
        p3.innerHTML += " per month";
    }
    else{
        p3.innerHTML += " per annum";
    }

    p3Title.innerHTML = "Salary: ";

    var p4 = document.createElement("p");
    var p4Title = document.createElement("strong");
    p4.innerHTML = startDate;
    p4Title.innerHTML = "Start date: ";

    var p5 = document.createElement("p");
    var p5Title = document.createElement("strong");
    p5.innerHTML = city;

    if(state == "vic"){
        p5.innerHTML += ", Victoria";
    }
    else if(state == "nsw"){
        p5.innerHTML += ", New South Wales";
    }
    else if(state == "qld"){
        p5.innerHTML += ", Queensland";
    }
    else if(state == "wa"){
        p5.innerHTML += ", Western Australia";
    }
    else if(state == "sa"){
        p5.innerHTML += ", South Australia";
    }
    else if(state == "ta"){
        p5.innerHTML += ", Tasmania";
    }
    else if(state == "act"){
        p5.innerHTML += ", Australian Capital Territory";
    }
    else if(state == "nt"){
        p5.innerHTML += ", Northern Territory";
    }
    else{
        p5.innerHTML += ", Other Australian Region";
    }

    p5Title.innerHTML = "Location: ";

    var p6 = document.createElement("p");
    var p6Title = document.createElement("strong");
    p6Title.innerHTML = "Employer: ";

    var a1 = document.createElement("a");
    a1.href = "/employer/" + employerId;
    a1.innerHTML = employerName

    var hr2 = document.createElement("hr");

    var p7 = document.createElement("p");

    var apply = document.createElement("a");
    apply.className = "btn btn-primary";
    apply.href = "/job/" + id;
    apply.innerHTML = "View";

    panel.appendChild(heading);
    panel.appendChild(body);
    heading.append(match);
    body.append(p1);
    body.append(hr1);
    body.append(p2);
    p2.prepend(p2Title);
    body.append(p3);
    p3.prepend(p3Title);
    body.append(p4);
    p4.prepend(p4Title);
    body.append(p5);
    p5.prepend(p5Title);
    body.append(p6);
    p6.append(a1);
    p6.prepend(p6Title);
    body.append(hr2);
    body.append(p7);
    p7.append(apply);
    display.appendChild(panel);

    document.getElementById("loading").style.display = "none";
}

/* Function to perform matchmaking. */
function match(){
    /* Get filter from document. */
    if(document.getElementById("state") !== null){
        var jobResource = "/api/jobs/state/" + document.getElementById("state").value;
    }
    else{
        var jobResource = "/api/jobs/employer/" + document.getElementById("employerid").value;
    }

    /* Get CSRF token from document. */
    var token = document.getElementsByName("csrf-token")[0].content;

    /* Arbitrary number; no. of fields compared. */
    var noOfBits = 25;

    /* Input value (needs to be grabbed from user). */
    var input;

    /* Array of job indexes. */
    var jobIndex = [];

    /* Array of bitwise ints to compare. */
    var jobMatch = [];

    /* Array of percentage matches. */
    var percentageMatch = [];

    /* Array to store jobs for later use. */
    var jobs = [];

    /* Get current authenticated user data. */
    $.getJSON("/api/user/token/" + token, function(data){
        input = parseInt("" + data.java + data.python + data.c + data.csharp + data.cplus + data.php + data.html + data.css + data.javascript + data.sql + data.unix + data.winserver + data.windesktop + data.linuxdesktop + data.macosdesktop + data.pearl + data.bash + data.batch + data.cisco + data.office + data.r + data.go + data.ruby + data.asp + data.scala, 2);
    }).then(function(){

        /* Populate values into jobIndex, jobMatch and percentageMatch arrays. */
        $.getJSON(jobResource + "/token/" + token, function(data){
            if(data.length > 0){
                var i;
                for(i = 0; i < data.length; i++){
                    /* Store jobs to storage array. */
                    jobs[i] = data[i];

                    jobIndex[i] = i;
                    jobMatch[i] = parseInt("" + data[i].java + data[i].python + data[i].c + data[i].csharp + data[i].cplus + data[i].php + data[i].html + data[i].css + data[i].javascript + data[i].sql + data[i].unix + data[i].winserver + data[i].windesktop + data[i].linuxdesktop + data[i].macosdesktop + data[i].pearl + data[i].bash + data[i].batch + data[i].cisco + data[i].office + data[i].r + data[i].go + data[i].ruby + data[i].asp + data[i].scala, 2);
                    
                    /* Find number of comparisons. */
                    var noOfComp = input | jobMatch[i];
                    
                    var bitComp = (noOfComp).toString(2);
                    
                    if(bitComp < 0){
                        bitComp = (noOfComp >>> 0).toString(2);
                        bitComp = bitComp.slice(-noOfBits);
                    }

                    var countComp = bitComp.replace(/[^1]/g, "").length;
                    
                    /* Find number of matches. */
                    var matchCalc = input & jobMatch[i];

                    var toBinary = (matchCalc).toString(2);

                    if(toBinary < 0){
                        toBinary = (matchCalc >>> 0).toString(2);
                        toBinary = toBinary.slice(-noOfBits);
                    }

                    var count = toBinary.replace(/[^1]/g, "").length;
                    
                    /* Calculate percentage match. */
                    percentageMatch[i] = (count / countComp) * 100;
                    
                    /* Check for overqualification; if yes, set match to 100%. */
                    var bitJob = "" + data[i].java + data[i].python + data[i].c + data[i].csharp + data[i].cplus + data[i].php + data[i].html + data[i].css + data[i].javascript + data[i].sql + data[i].unix + data[i].winserver + data[i].windesktop + data[i].linuxdesktop + data[i].macosdesktop + data[i].pearl + data[i].bash + data[i].batch + data[i].cisco + data[i].office + data[i].r + data[i].go + data[i].ruby + data[i].asp + data[i].scala;
                    
                    var countJob = bitJob.replace(/[^1]/g, "").length;
                    
                    if(count == countJob){
                        percentageMatch[i] = 100;
                    }
                }

                /* Bubble sort. */
                var swapped;

                do{
                    swapped = false;

                    var i;
                    for(i = 0; i < jobIndex.length-1; i++){
                        if(percentageMatch[i] < percentageMatch[i+1]){
                            var tempPer = percentageMatch[i];
                            percentageMatch[i] = percentageMatch[i+1];
                            percentageMatch[i+1] = tempPer;

                            var tempId = jobIndex[i];
                            jobIndex[i] = jobIndex[i+1];
                            jobIndex[i+1] = tempId;

                            var tempJob = jobMatch[i];
                            jobMatch[i] = jobMatch[i+1];
                            jobMatch[i+1] = tempJob;

                            swapped = true;
                        }
                    }
                }
                while(swapped);
            }
        })
        .then(function(){

            /* Display jobs. */
            if(jobs.length > 0){
                var i;
                for(i = 0; i < jobs.length; i++){
                    var order = jobIndex[i];
                    printJob(jobs[order].id, jobs[order].title, jobs[order].description, jobs[order].hours, jobs[order].rate, jobs[order].salary, jobs[order].startdate, jobs[order].state, jobs[order].city, jobs[order].employername, jobs[order].employerid, Math.round(percentageMatch[i]));
                }
            }
            else{
                document.getElementById("loading").style.display = "none";
                document.getElementById("nomatches").style.display = "block";
            }
        })
        .fail(function(){
            document.getElementById("loading").style.display = "none";
            document.getElementById("error").style.display = "block";
        });
    })
    .fail(function(){
        document.getElementById("loading").style.display = "none";
        document.getElementById("error").style.display = "block";
    });
}

/* Initialisation function to test for JavaScript, display loading animation, and call match function. */
function init(){
    document.getElementById("jobs").innerHTML = "";

    document.getElementById("noscript").style.display = "none";
    document.getElementById("nomatches").style.display = "none";
    document.getElementById("error").style.display = "none";
    document.getElementById("loading").style.display = "block";

    match();
}

document.addEventListener('DOMContentLoaded', init);

if(document.getElementById("state") !== null){
    document.getElementById("state").addEventListener('change', init);
}
