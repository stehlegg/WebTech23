<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav>
    <img src="img/Logo_LangB.png" alt="Logo" onclick="window.location.href='index.php';"">
    <div class=" burger-icon" onclick="toggleMenu()">&#9776;</div>
    <ul>
        <li><a <?php if ($current_page == 'index.php') echo 'class="active"'; ?> href="index.php">Home</a></li>
        <li><a <?php if ($current_page == 'clgroup.php' || $current_page == 'clro16.php' || $current_page == 'buli.php') echo 'class="active"'; ?>>Wettbewerbe v</a>
            <ul>
                <li><a <?php if ($current_page == 'clgroup.php' || $current_page == 'clro16.php') echo 'class="active"'; ?>>Champions League -></a>
                    <ul>
                        <li><a <?php if ($current_page == 'clgroup.php') echo 'class="active"'; ?> href="clgroup.php">Gruppenphase</a></li>
                        <li><a <?php if ($current_page == 'clro16.php') echo 'class="active"'; ?> href="clro16.php">Achtelfinale</a></li>
                    </ul>
                </li>
                <li><a <?php if ($current_page == 'buli.php') echo 'class="active"'; ?> href="buli.php">Bundesliga</a></li>
            </ul>
        </li>
        <li><a <?php if ($current_page == 'klubs.php') echo 'class="active"'; ?> href="klubs.php">Vereine</a></li>
        <li><a <?php if ($current_page == 'scorer.php') echo 'class="active"'; ?> href="scorer.php">Scorer</a></li>
        <li><a <?php if ($current_page == 'verletzte.php') echo 'class="active"'; ?> href="verletzte.php">Verletzungen</a></li>
        <li><a <?php if ($current_page == 'kader.php') echo 'class="active"'; ?> href="kader.php">Kader</a></li>
    </ul>
</nav>