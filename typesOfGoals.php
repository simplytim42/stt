<!DOCTYPE html>
<html lang="en">
<head>
    <title>Types of Goals</title>
    <?php require './includes/headContent.html' ?>
</head>
<body>

    <?php require './includes/nav.html' ?>

    <main>
        <section>
            <h1>Types of Goals Scored</h1>
            <div id="derby" class="togChart"></div>
            <div id="ipswich" class="togChart"></div>
        </section>
    </main>

    <script>
        //Load API
        google.charts.load('current', {'packages':['corechart']});

        //set callback for when API has loaded
        google.charts.setOnLoadCallback(buildGoalCharts);

        function buildGoalCharts(data) {
             //get data from server
            fetch('./api/getData.php?data=tog')
            .then(response => response.json())
            .then(responseData => {
                //call two more functions to draw the specific charts
                drawGoals('Derby', responseData.Derby, 'derby');
                drawGoals('Ipswich', responseData.Ipswich, 'ipswich');
            });
        }
    </script>
</body>
</html>