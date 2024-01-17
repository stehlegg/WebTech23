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
    <form action="kontakt.php" method="post" enctype="multipart/form-data">
        Aus TXT-Datei importieren:
        <input type="file" name="file" id="fileToUpload">
        <input type="submit" name="submit" value="Import starten">
    </form>

    <div class="text">
    <?php
    if ($_FILES['uploadedfile']['error'] == UPLOAD_ERR_OK
        && is_uploaded_file($_FILES['file']['tmp_name'])) {
        echo file_get_contents($_FILES['file']['tmp_name']);
    }
    ?>
    </div>
    <input type="submit" name="send" value="Absenden">

</main>


    <?php include('footer.php') ?>
</body>

</html>