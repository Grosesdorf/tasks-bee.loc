$(document).ready(function() {
	$("#tasksTable").tablesorter({
		headers: { 
            3: { 
                sorter: false 
            }
        } 
    });
});
