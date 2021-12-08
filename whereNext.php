<!DOCTYPE html>
<html lang="en">
<head>
    <title>Where Next?</title>
    <?php require './includes/headContent.html' ?>
</head>
<body>

    <?php require './includes/nav.html' ?>

    <main>
        <section>
            <h1>Where Next?</h1>

            <h2>Security</h2>
            <ul>
                <li>XSS</li>
                <li>Input Validation</li>
                <li>CSRF</li>
                <li>Error Handling</li>
                <li>API Security Keys</li>
            </ul>

            <h2>Functionality</h2>
            <ul>
                <li><a href="./api/getData.php?data=gag">Exploit API</a></li>
                <li><a href="./api/getData.php?data=custom&args[]=date&args[]=team&args[]=goals-scored">Exploit Customisable API</a></li>
                <li>File Upload</li>
                <li>Migrate away from Google Charts for offline use (D3.js?)</li>
                <li>Refactor code to allow for any CSV</li>
            </ul>
            
        </section>
    </main>

</body>
</html>