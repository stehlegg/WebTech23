<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="./topnav.js"></script>
  <script src="./tabs.js"></script>
  <script src="./dropdown.js"></script>
  <title>MatchMatrix</title>
</head>

<body>

  <?php include('topnav.php') ?>

  <main id="main">
  <div class="tab-buttons">
    <button onclick="showTab('all')">Alle Gruppen</button>
    <button onclick="showTab('A')">Gruppe A</button>
    <button onclick="showTab('B')">Gruppe B</button>
    <button onclick="showTab('C')">Gruppe C</button>
    <button onclick="showTab('D')">Gruppe D</button>
    <button onclick="showTab('E')">Gruppe E</button>
    <button onclick="showTab('F')">Gruppe F</button>
    <button onclick="showTab('G')">Gruppe G</button>
    <button onclick="showTab('H')">Gruppe H</button>
  </div>

  <div id="all" class="tab-content active-tab">
    <h2>Alle Gruppen</h2>
    <?php
    require 'tables.php';

    $gruppen = [$gruppeA, $gruppeB, $gruppeC, $gruppeD, $gruppeE, $gruppeF, $gruppeG, $gruppeH];

    foreach ($gruppen as $gruppe) {
      echo createTable($gruppe, "cl");
    }
    ?>
  </div>

  <div id="A" class="tab-content">
    <h2>Gruppe A</h2>
    <?php
    echo createTable($gruppeA, "cl");
    ?>
  </div>

  <div id="B" class="tab-content">
    <h2>Gruppe B</h2>
    <?php
    echo createTable($gruppeB, "cl");
    ?>
  </div>

  <div id="C" class="tab-content">
    <h2>Gruppe C</h2>
    <?php
    echo createTable($gruppeC, "cl");
    ?>
  </div>

  <div id="D" class="tab-content">
    <h2>Gruppe D</h2>
    <?php
    echo createTable($gruppeD, "cl");
    ?>
  </div>

  <div id="E" class="tab-content">
    <h2>Gruppe E</h2>
    <?php
    echo createTable($gruppeE, "cl");
    ?>
  </div>

  <div id="F" class="tab-content">
    <h2>Gruppe F</h2>
    <?php
    echo createTable($gruppeF, "cl");
    ?>
  </div>

  <div id="G" class="tab-content">
    <h2>Gruppe G</h2>
    <?php
    echo createTable($gruppeG, "cl");
    ?>
  </div>

  <div id="H" class="tab-content">
    <h2>Gruppe H</h2>
    <?php
    echo createTable($gruppeH, "cl");
    ?>
  </div>
</main>


  <?php include('footer.php') ?>

</body>

</html>