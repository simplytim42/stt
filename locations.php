<!DOCTYPE html>
<html lang="en">
<head>
    <title>Locations</title>
    <?php require './includes/headContent.html' ?>
</head>
<body>

    <?php require './includes/nav.html' ?>

    <main>
        <section>
            <h1>Locations of Games</h1>
            <div id="derby" class="locChart"></div>
            <div id="ipswich" class="locChart"></div>
        </section>
    </main>

    <script>
        //Load API
        google.charts.load('current', {'packages':['corechart']});

        //set callback for when API has loaded
        google.charts.setOnLoadCallback(buildLocationCharts);

        function buildLocationCharts(data) {
             //get data from server
            fetch('./api/getData.php?data=loc')
            .then(response => response.json())
            .then(responseData => {
                //call two more functions to draw the specific charts
                drawLocations('Derby', responseData.Derby, 'derby');
                drawLocations('Ipswich', responseData.Ipswich, 'ipswich');
            });
        }
    </script>
</body>
</html>