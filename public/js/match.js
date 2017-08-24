/* Function to print job to panel. */
function printJob(title, description){
	var display = document.getElementById("jobs");

	var panel = document.createElement("div");
	panel.className = "panel panel-default";

	var heading = document.createElement("div");
	heading.className = "panel-heading";
	heading.innerHTML = title;

	var body = document.createElement("div");
	body.className = "panel-body";
	body.innerHTML = description;

	panel.appendChild(heading);
	panel.appendChild(body);
	display.appendChild(panel);
}

$.getJSON( "api/jobs", function(data){
	for(i = 0; i < data.length; i++){
		printJob(data[i].title, data[i].description);
	}
});
