function drawLocations(team, locationData, div_id) {

    //instatiate new DataTable object
    var data = new google.visualization.DataTable();

    data.addColumn('string', 'Location');
    data.addColumn('number', 'Times Played');

    //loop through locationData and add it to the DataTable for our Chart
    for (var name in locationData) {
        data.addRow([
            name,
            locationData[name]
        ]);
    }

    var options = {
        'title':'Where '+ team +' has Played',
        'width':700,
        'height':400
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
        'title':'Types of Goals '+ team +' has Scored',
        'width':700,
        'height':400
    };

    //draw chart
    var chart = new google.visualization.PieChart(document.getElementById(div_id));
    chart.draw(data, options);
}