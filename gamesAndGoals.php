<!DOCTYPE html>
<html lang="en">
<head>
    <title>Games and Goals</title>
    <?php require './includes/headContent.html' ?>
    <script defer src="./js/loadGagChart.js"></script>
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

</body>
</html>