function drawLocations(locationData, div_id) {

    //instatiate new DataTable object
    var data = new google.visualization.DataTable();

    data.addColumn('string', 'Location');
    data.addColumn('number', 'Derby');
    data.addColumn('number', 'Ipswich');

    //loop through locationData and add it to the DataTable for our Chart
    for (var name in locationData) {
        data.addRow([
            name,
            locationData[name].Derby,
            locationData[name].Ipswich
        ]);
    }

    var options = {
        legend: 'bottom'
    };

    //draw chart
    var chart = new google.visualization.BarChart(document.getElementById(div_id));
    chart.draw(data, options);
}

function drawGoals(team, GoalData, div_id) {

    //instatiate new DataTable object
    var data = new google.visualization.DataTable();

    data.addColumn('string', 'Type of Goal');
    data.addColumn('number', 'Amount Scored');

    //loop through locationData and add it to the DataTable for our Chart
    for (var name in GoalData) {
        data.addRow([
            name,
            GoalData[name]
        ]);
    }

    var options = {
        title: team,
        legend: 'left'
    };

    //draw chart
    var chart = new google.visualization.PieChart(document.getElementById(div_id));
    chart.draw(data, options);
}

function drawSac(team, SacData, div_id) {

    //instatiate new DataTable object
    var data = new google.visualization.DataTable();

    data.addColumn('date', 'Date');
    data.addColumn('number', 'Camera Footage');
    data.addColumn('number', 'Scouting Reports');

    //loop through locationData and add it to the DataTable for our Chart
    SacData.forEach(element => {
        for (var name in element) {
            data.addRow([
                new Date(element['Date']),
                parseInt(element['Camera Footage']),
                parseInt(element['Scouting Reports'])
            ]);
        }
    });


    var options = {
        title: team
    };

    //draw chart
    var chart = new google.visualization.LineChart(document.getElementById(div_id));
    chart.draw(data, options);
}

function drawGag(team, GagData, div_id) {

    //instatiate new DataTable object
    var data = new google.visualization.DataTable();

    data.addColumn('date', 'Date');
    data.addColumn('number', 'Games Played');
    data.addColumn('number', 'Goals Scored');
    data.addColumn('number', 'Goals Against');

    //loop through locationData and add it to the DataTable for our Chart
    GagData.forEach(element => {
        for (var name in element) {
            data.addRow([
                new Date(element['Date']),
                parseInt(element['Games Played']),
                parseInt(element['Goals Scored']),
                parseInt(element['Goals Against'])
            ]);
        }
    });


    var options = {
        title: team
    };

    //draw chart
    var chart = new google.visualization.LineChart(document.getElementById(div_id));
    chart.draw(data, options);
}