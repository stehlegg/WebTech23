<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="./topnav.js"></script>
    <script src="./login.js"></script>
    <script src="./dropdown.js"></script>
    <title>MatchMatrix</title>
</head>

<body>

    <?php include('topnav.php') ?>

    <main id="main">
    <div class="container">
<div class="header">
 <h1>Login</h1>
 <h2>Nutzername: Admin</h2>
 <h2>Passwort: Webtech</h2>
 </div>

<form name="login" onsubmit="return validateForm() ;" method="post">

<ul>
<li>Username: <input class="username" type="text" name="username" required>
</li>

<li>Password <input class="password" type="password" name="password" required>
</li>
</ul>

<input type="button" class="submit" value="Log In" name="submit"  onclick="validate()">
</form>
</div>
    </main>



    <?php include('footer.php') ?>
</body>

</html>