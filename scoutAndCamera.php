<!DOCTYPE html>
<html lang="en">
<head>
    <title>Scouts And Cameras</title>
    <?php require './includes/headContent.html' ?></head>
<body>

    <?php require './includes/nav.html' ?>

    <main>
        <section>
            <h1>Scouting Reports and Camera Footage</h1>
            <div id="derby" class="sacChart"></div>
            <div id="ipswich" class="sacChart"></div>
        </section>
    </main>

    <script>
        //Load API
        google.charts.load('current', {'packages':['corechart']});

        //set callback for when API has loaded
        google.charts.setOnLoadCallback(buildSacCharts);

        function buildSacCharts(data) {
             //get data from server
            fetch('./api/getData.php?data=sac')
            .then(response => response.json())
            .then(responseData => {
                //call two more functions to draw the specific charts
                drawSac('Derby', responseData.Derby, 'derby');
                drawSac('Ipswich', responseData.Ipswich, 'ipswich');
            });
        }
    </script>
</body>
</html>