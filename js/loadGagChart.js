//Load API
google.charts.load('current', {'packages':['corechart']});

//set callback for when API has loaded
google.charts.setOnLoadCallback(buildGagCharts);