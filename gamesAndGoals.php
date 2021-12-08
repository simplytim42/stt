<!DOCTYPE html>
<html lang="en">
<head>
    <title>Games and Goals</title>
    <?php require './includes/headContent.html' ?>
</head>
<body>

    <?php require './includes/nav.html' ?>

    <main>
        <section>
            <h1>Games Played and Goals Scored (Smoothed)</h1>
            <div id="derby" class="gagChart"></div>
            <div id="ipswich" class="gagChart"></div>
        </section>
    </main>


    <script>
        //Load API
        google.charts.load('current', {'packages':['corechart']});

        //set callback for when API has loaded
        google.charts.setOnLoadCallback(buildGagCharts);

        function buildGagCharts(data) {
             //get data from server
            fetch('./api/getData.php?data=gag')
            .then(response => response.json())
            .then(responseData => {
                //call two more functions to draw the specific charts
                drawGag('Derby', responseData.Derby, 'derby');
                drawGag('Ipswich', responseData.Ipswich, 'ipswich');
            });
        }
    </script>
</body>
</html>