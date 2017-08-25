/* Function to print job to panel. */
function printJob(title, description, hours, salary, availablefrom, location, startdate){
	var display = document.getElementById("jobs");

	var panel = document.createElement("div");
	panel.className = "panel panel-default";

	var heading = document.createElement("div");
	heading.className = "panel-heading";
	heading.innerHTML = title;

	var body = document.createElement("div");
	body.className = "panel-body";

	var p1 = document.createElement("p");
	p1.innerHTML = description;

	var hr1 = document.createElement("hr");

	var p2 = document.createElement("p");
	p2.innerHTML = hours;

	var p3 = document.createElement("p");
	p3.innerHTML = salary;

	var p4 = document.createElement("p");
	p4.innerHTML = availablefrom;

	var p5 = document.createElement("p");
	p5.innerHTML = location;

	var p6 = document.createElement("p");
	p6.innerHTML = startdate;

	var hr2 = document.createElement("hr");

	var p7 = document.createElement("p");

	var apply = document.createElement("button");
	apply.className = "btn btn-primary";
	apply.innerHTML = "Apply";

	panel.appendChild(heading);
	panel.appendChild(body);
	body.append(p1);
	body.append(hr1);
	body.append(p2);
	body.append(p3);
	body.append(p4);
	body.append(p5);
	body.append(p6);
	body.append(hr2);
	body.append(p7);
	p7.append(apply);
	display.appendChild(panel);

	document.getElementById("loading").style.display = "none"
}

$.getJSON( "api/jobs", function(data){
	for(i = 0; i < data.length; i++){
		printJob(data[i].title, data[i].description, data[i].hours, data[i].salary, data[i].availablefrom, data[i].location, data[i].startdate);
	}
});
