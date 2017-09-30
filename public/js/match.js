/* Function to print job to panel in view. */
function printJob(id, title, description, hours, rate, salary, startDate, state, city, employerName, employerId, percentageMatch){
    if(document.getElementById("job") !== null){
        /* Print single percentageMatch to document if in single job view. */
        document.getElementById("percentage-match").innerHTML = percentageMatch + "&#37;";
    }
    else{
        /* Print all jobs to document. */
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

        var p0 = document.createElement("p");
        var marker = document.createElement("i");
        var combinedLocation = document.createElement("strong");
        marker.className = "fa fa-map-marker";
        marker.ariaHidden = true;
        combinedLocation.innerHTML = " " + city;

        if(state == "vic"){
            combinedLocation.innerHTML += ", Victoria";
        }
        else if(state == "nsw"){
            combinedLocation.innerHTML += ", New South Wales";
        }
        else if(state == "qld"){
            combinedLocation.innerHTML += ", Queensland";
        }
        else if(state == "wa"){
            combinedLocation.innerHTML += ", Western Australia";
        }
        else if(state == "sa"){
            combinedLocation.innerHTML += ", South Australia";
        }
        else if(state == "ta"){
            combinedLocation.innerHTML += ", Tasmania";
        }
        else if(state == "act"){
            combinedLocation.innerHTML += ", Australian Capital Territory";
        }
        else if(state == "nt"){
            combinedLocation.innerHTML += ", Northern Territory";
        }
        else{
            combinedLocation.innerHTML += ", Other Australian Region";
        }

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

        /* Don't print empoyer name to employer view document (to avoid redundancy). */
        if(document.getElementById("employer") == null){
            var p5 = document.createElement("p");
            var p5Title = document.createElement("strong");
            p5Title.innerHTML = "Employer: ";
        }

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
        body.append(p0);
        p0.prepend(marker);
        p0.append(combinedLocation);
        body.append(p1);
        body.append(hr1);
        body.append(p2);
        p2.prepend(p2Title);
        body.append(p3);
        p3.prepend(p3Title);
        body.append(p4);
        p4.prepend(p4Title);

        /* Don't print empoyer name to employer view document (to avoid redundancy). */
        if(document.getElementById("employer") == null){
            body.append(p5);
            p5.append(a1);
            p5.prepend(p5Title);
        }

        body.append(hr2);
        body.append(p7);
        p7.append(apply);
        display.appendChild(panel);

        document.getElementById("loading").style.display = "none";
    }
}

/* Function to perform matchmaking. */
function match(){
    /* Get filter from matches document. */
    if(document.getElementById("filters") !== null){
        if(document.getElementById("rate").value == "any"){
            document.getElementById("salary").disabled = true;
            document.getElementById("salary").value = "";
            var salary = "any";
        }
        else{
            document.getElementById("salary").disabled = false;

            if(event.target.id !== "salary"){
                document.getElementById("salary").value = document.getElementById("salary").min;
            }

            var salary = document.getElementById("salary").value;
        }

        var jobResource = "/api/jobs/state/" + document.getElementById("state").value + "/hours/" + document.getElementById("hours").value + "/term/" + document.getElementById("term").value + "/rate/" + document.getElementById("rate").value + "/salary/" + salary;
    }
    /* Get job ID from single job document. */
    else if(document.getElementById("job") !== null){
        var jobResource = "/api/job/" + document.getElementById("jobid").value;
    }
    /* Get employer ID from employer view document. */
    else{
        var jobResource = "/api/jobs/employer/" + document.getElementById("employerid").value;
    }

    /* Get CSRF token from document. */
    var token = document.getElementsByName("csrf-token")[0].content;

    /* Arbitrary number; no. of fields compared. */
    var noOfBits = 51;

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
        input = parseInt("" + data.java + data.python + data.c + data.csharp + data.cplus + data.php + data.html + data.css + data.javascript + data.sql + data.unix + data.winserver + data.windesktop + data.linuxdesktop + data.macosdesktop + data.perl + data.bash + data.batch + data.cisco + data.office + data.r + data.go + data.ruby + data.asp + data.scala + data.cow + data.actionscript + data.assembly + data.autohotkey + data.coffeescript + data.d + data.fsharp + data.haskell + data.matlab + data.objectivec + data.objectivecplus + data.pascal + data.powershell + data.rust + data.swift + data.typescript + data.vue + data.webassembly + data.apache + data.aws + data.docker + data.nginx + data.saas + data.ipv4 + data.ipv6 + data.dns, 2);
    }).then(function(){

        /* Populate values into jobIndex, jobMatch and percentageMatch arrays. */
        $.getJSON(jobResource + "/token/" + token, function(data){
            if(data.length > 0){
                var i;
                for(i = 0; i < data.length; i++){
                    /* Store jobs to storage array. */
                    jobs[i] = data[i];

                    jobIndex[i] = i;
                    jobMatch[i] = parseInt("" + data[i].java + data[i].python + data[i].c + data[i].csharp + data[i].cplus + data[i].php + data[i].html + data[i].css + data[i].javascript + data[i].sql + data[i].unix + data[i].winserver + data[i].windesktop + data[i].linuxdesktop + data[i].macosdesktop + data[i].perl + data[i].bash + data[i].batch + data[i].cisco + data[i].office + data[i].r + data[i].go + data[i].ruby + data[i].asp + data[i].scala + data[i].cow + data.actionscript + data.assembly + data.autohotkey + data.coffeescript + data.d + data.fsharp + data.haskell + data.matlab + data.objectivec + data.objectivecplus + data.pascal + data.powershell + data.rust + data.swift + data.typescript + data.vue + data.webassembly + data.apache + data.aws + data.docker + data.nginx + data.saas + data.ipv4 + data.ipv6 + data.dns, 2);
                    
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
                    var bitJob = "" + data[i].java + data[i].python + data[i].c + data[i].csharp + data[i].cplus + data[i].php + data[i].html + data[i].css + data[i].javascript + data[i].sql + data[i].unix + data[i].winserver + data[i].windesktop + data[i].linuxdesktop + data[i].macosdesktop + data[i].perl + data[i].bash + data[i].batch + data[i].cisco + data[i].office + data[i].r + data[i].go + data[i].ruby + data[i].asp + data[i].scala + data[i].cow + data[i].actionscript + data[i].assembly + data[i].autohotkey + data[i].coffeescript + data[i].d + data[i].fsharp + data[i].haskell + data[i].matlab + data[i].objectivec + data[i].objectivecplus + data[i].pascal + data[i].powershell + data[i].rust + data[i].swift + data[i].typescript + data[i].vue + data[i].webassembly + data[i].apache + data[i].aws + data[i].docker + data[i].nginx + data[i].saas + data[i].ipv4 + data[i].ipv6 + data[i].dns;
                    
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
                if(document.getElementById("job") == null){
                    document.getElementById("loading").style.display = "none";
                    document.getElementById("nomatches").style.display = "block";
                }
            }
        })
        .fail(function(){
            if(document.getElementById("job") == null){
                document.getElementById("loading").style.display = "none";
                document.getElementById("error").style.display = "block";
            }
        });
    })
    .fail(function(){
        if(document.getElementById("job") == null){
            document.getElementById("loading").style.display = "none";
            document.getElementById("error").style.display = "block";
        }
    });
}

/* Initialisation function to test for JavaScript, display loading animation, and call match function. */
function init(){
    if(document.getElementById("job") == null){
        document.getElementById("jobs").innerHTML = "";

        document.getElementById("noscript").style.display = "none";
        document.getElementById("nomatches").style.display = "none";
        document.getElementById("error").style.display = "none";
        document.getElementById("loading").style.display = "block";
    }

    match();
}

document.addEventListener('DOMContentLoaded', init);

if(document.getElementById("filters") !== null){
    document.getElementById("state").addEventListener('change', init);
    document.getElementById("hours").addEventListener('change', init);
    document.getElementById("term").addEventListener('change', init);
    document.getElementById("rate").addEventListener('change', init);
    document.getElementById("salary").addEventListener('change', init);
}
