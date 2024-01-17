<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="./topnav.js"></script>
    <script src="./dropdown.js"></script>
    <title>MatchMatrix</title>
</head>

<body>

    <?php include('topnav.php') ?>



    <main id="main">
    <?php
    require 'tables.php';
    echo createTable($scorer);
    ?>
</main>

    <?php include('footer.php') ?>


</body>

</html>