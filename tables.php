<?php
function createTable($data, $class = "defTable")
{
    echo "<table>
            <thead>
                <tr>";
    // Header erstellen
    foreach ($data[0] as $header) {
        echo "<th class=$class>$header</th>";
    }
    echo "</tr>
            </thead>
            <tbody>";

    // Einträge erstellen
    for ($i = 1; $i < count($data); $i++) {
        echo "<tr>";
        foreach ($data[$i] as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>
        </table>";
}

$gruppeA = array(
    array('Verein', 'Sp', 'S', 'U', 'N', 'T', 'GT', 'TD', 'Pkte'),
    array('Bayern', '4', '4', '0', '0', '11', '6', '5', '12'),
    array('FCK', '4', '1', '1', '2', '7', '8', '-1', '4'),
    array('Galatasaray', '4', '1', '1', '2', '7', '9', '-2', '4'),
    array('ManUnited', '4', '1', '0', '3', '9', '11', '-2', '3')
);

$gruppeB = array(
    array('Verein', 'Sp', 'S', 'U', 'N', 'T', 'GT', 'TD', 'Pkte'),
    array('Arsenal', '4', '3', '0', '1', '9', '3', '6', '9'),
    array('PSV Eindhoven', '4', '1', '2', '1', '4', '7', '-3', '5'),
    array('Lens', '4', '1', '2', '1', '4', '7', '-3', '5'),
    array('Sevilla', '4', '0', '2', '2', '4', '7', '-3', '2')
);

$gruppeC = array(
    array('Verein', 'Sp', 'S', 'U', 'N', 'T', 'GT', 'TD', 'Pkte'),
    array('Real Madrid', '4', '4', '0', '0', '9', '3', '6', '12'),
    array('Neapel', '4', '2', '1', '1', '6', '5', '1', '7'),
    array('Braga', '4', '1', '0', '3', '5', '9', '-4', '3'),
    array('Union Berlin', '4', '0', '1', '3', '3', '6', '-3', '1')
);

$gruppeD = array(
    array('Verein', 'Sp', 'S', 'U', 'N', 'T', 'GT', 'TD', 'Pkte'),
    array('Real Sociedad', '4', '3', '1', '0', '7', '2', '5', '10'),
    array('Inter', '4', '3', '1', '0', '5', '2', '3', '10'),
    array('RB Salzburg', '4', '1', '0', '3', '3', '5', '-2', '3'),
    array('Benfica', '4', '0', '0', '4', '1', '7', '-6', '0')
);

$gruppeE = array(
    array('Verein', 'Sp', 'S', 'U', 'N', 'T', 'GT', 'TD', 'Pkte'),
    array('Atlético Madrid', '4', '2', '2', '0', '12', '5', '7', '8'),
    array('Lazio', '4', '2', '1', '1', '5', '5', '0', '7'),
    array('Feyenoord', '4', '2', '0', '2', '7', '5', '2', '6'),
    array('Celtic', '4', '0', '1', '3', '3', '12', '-9', '1')
);

$gruppeF = array(
    array('Verein', 'Sp', 'S', 'U', 'N', 'T', 'GT', 'TD', 'Pkte'),
    array('Dortmund', '4', '2', '1', '1', '3', '2', '1', '7'),
    array('PSG', '4', '2', '0', '2', '7', '6', '1', '6'),
    array('Milan', '4', '1', '2', '1', '2', '4', '-2', '5'),
    array('Newcastle', '4', '4', '0', '0', '12', '3', '9', '12')
);

$gruppeG = array(
    array('Verein', 'Sp', 'S', 'U', 'N', 'T', 'GT', 'TD', 'Pkte'),
    array('Man City', '4', '4', '0', '0', '12', '3', '9', '12'),
    array('RB Leipzig', '4', '3', '0', '1', '9', '6', '3', '9'),
    array('Roter Stern', '4', '0', '1', '3', '5', '10', '-5', '1'),
    array('Young Boys', '4', '0', '1', '3', '4', '11', '-7', '1')
);

$gruppeH = array(
    array('Verein', 'Sp', 'S', 'U', 'N', 'T', 'GT', 'TD', 'Pkte'),
    array('Barcelona', '4', '3', '0', '1', '8', '2', '6', '9'),
    array('FC Porto', '4', '3', '0', '1', '9', '3', '6', '9'),
    array('Donezk', '4', '2', '0', '2', '6', '7', '-1', '6'),
    array('Antwerp', '4', '0', '0', '4', '3', '14', '-11', '0')
);

$buli = array(
    array('Pos', 'Team', 'Sp', 'Sieg', 'U', 'N', 'Tore', 'Ggt', 'Diff', 'Pkt'),
    array('1.', 'SV Eintracht Trier 05', '6', '6', '0', '0', '23', '4', '19', '18'),
    array('2.', 'Borussia Dortmund', '7', '4', '1', '2', '16', '16', '0', '13'),
    array('3.', 'Schalke 04', '6', '4', '0', '2', '13', '9', '4', '12'),
    array('4.', 'TSG Hoffenheim', '6', '3', '3', '0', '11', '7', '4', '12'),
    array('5.', 'FC Bayern', '6', '3', '2', '1', '6', '4', '2', '11'),
    array('6.', 'Bayer 04', '6', '3', '1', '2', '12', '7', '5', '10'),
    array('7.', 'RB Leipzig', '6', '3', '1', '2', '6', '3', '3', '10'),
    array('8.', 'Mainz 05', '6', '3', '1', '2', '8', '7', '1', '10'),
    array('9.', 'VfL Bochum', '6', '3', '1', '2', '6', '5', '1', '10'),
    array('10.', 'SC Freiburg', '6', '2', '2', '2', '10', '11', '-1', '8'),
    array('11.', '1. FC Köln', '6', '2', '1', '3', '7', '5', '2', '7'),
    array('12.', 'Hannover', '6', '1', '4', '1', '9', '9', '0', '7'),
    array('13.', 'Borussia M\'gladbach', '6', '2', '1', '3', '8', '12', '-4', '7'),
    array('14.', 'Eintracht Frankfurt', '7', '2', '0', '5', '10', '15', '-5', '6'),
    array('15.', 'VfB Stuttgart', '6', '1', '1', '4', '7', '11', '-4', '4'),
    array('16.', 'VfL Wolfsburg', '6', '0', '4', '2', '4', '8', '-4', '4'),
    array('17.', 'Union Berlin', '6', '0', '2', '4', '4', '14', '-10', '2'),
    array('18.', 'SV Werder', '6', '0', '1', '5', '2', '15', '-13', '1'),
);

$clro16 = array(
    array('Team 1', 'vs', 'Team 2'),
    array('<img src="img/wappen/fcp.png" alt="Verein 1">', '-:-', '<img src="img/wappen/ars.png" alt="Verein 2">'),
    array('<img src="img/wappen/fcn.png" alt="Verein 1">', '-:-', '<img src="img/wappen/fcb.png" alt="Verein 2">'),
    array('<img src="img/wappen/psg.png" alt="Verein 1">', '-:-', '<img src="img/wappen/rss.png" alt="Verein 2">'),
    array('<img src="img/wappen/int.png" alt="Verein 1">', '-:-', '<img src="img/wappen/ath.png" alt="Verein 2">'),
    array('<img src="img/wappen/psv.png" alt="Verein 1">', '-:-', '<img src="img/wappen/bvb.png" alt="Verein 2">'),
    array('<img src="img/wappen/ssl.png" alt="Verein 1">', '-:-', '<img src="img/wappen/bay.png" alt="Verein 2">'),
    array('<img src="img/wappen/kob.png" alt="Verein 1">', '-:-', '<img src="img/wappen/cit.png" alt="Verein 2">'),
    array('<img src="img/wappen/rb.png" alt="Verein 1">', '-:-', '<img src="img/wappen/rea.png" alt="Verein 2">'),
);


$taktik = array(
    array("Pos", "Name", "Größe", "Alter", "Geb", "Position", "Nr.", "Starker Fuß", "Eins", "Tore", "Vor"),
    array("TW", "Gianluigi Buffon", "192 cm", 21, "ITA", "TW", 1, "Nur Rechts", 57, 0, 0),
    array("VR", "Gary Neville", "179 cm", 24, "ENG", "V (RZ), FV (R)", 2, "Rechts", "44 (7)", 5, 5),
    array("VZR", "Jaap Stam", "190 cm", 26, "NED", "V (Z)", 6, "Rechts", "33 (12)", 10, 0),
    array("VZL", "Kevin Hofland", "186 cm", 19, "NED", "V (Z)", 5, "Nur Links", "46 (3)", 5, 1),
    array("VL", "Felipe", "175 cm", 21, "BRA", "V/FV/M/OM (L)", 4, "Links", "46 (3)", 2, 6),
    array("MR", "David Beckham", "180 cm", 24, "ENG", "M/OM (RZ)", 7, "Rechts", "38 (10)", 7, 26),
    array("MZR", "Pablo Aimar", "170 cm", 19, "ARG", "M/OM (Z)", 30, "Rechts", "16 (4)", 9, 9),
    array("MZL", "Roy Keane", "180 cm", 27, "IRL", "DM, M (Z)", 16, "Rechts", "39 (8)", 7, 11),
    array("ML", "Ryan Giggs", "180 cm", 25, "WAL", "M/OM (LZ)", 11, "Links", "42 (11)", 10, 31),
    array("STZR", "Andy Cole", "178 cm", 27, "ENG", "ST (Z)", 9, "Rechts", "50 (3)", 44, 20),
    array("STZL", "Zlatan Ibrahimović", "195 cm", 17, "SWE", "ST (Z)", 10, "Rechts", "47 (3)", 25, 8),
    array("E1", "Ronny Johnsen", "190 cm", 29, "NOR", "V (Z), DM, M (Z)", 22, "Rechts", "33 (14)", 2, 1),
    array("E2", "Denis Irwin", "173 cm", 33, "IRL", "V (RL)", 3, "Beide", "15 (17)", 5, 2),
    array("E3", "Wes Brown", "186 cm", 19, "ENG", "V (RZ)", 24, "Rechts", 4, 0, 0),
    array("E4", "Phil Neville", "180 cm", 22, "ENG", "V (RL), FV/M (L)", 12, "Beide", "19 (18)", 6, 3),
    array("E5", "Nicky Butt", "178 cm", 24, "ENG", "DM, M (Z)", 8, "Rechts", "26 (14)", 5, 9),
    array("E6", "Paul Scholes", "170 cm", 24, "ENG", "M/OM (Z), ST (Z)", 18, "Rechts", "38 (10)", 12, 12),
    array("E7", "Dwight Yorke", "182 cm", 27, "TRI", "M/OM (R), ST (Z)", 19, "Rechts", "24 (34)", 35, 18),
    array("E8", "Ole Gunnar Solskjær", "176 cm", 26, "NOR", "ST (Z)", 20, "Rechts", "18 (19)", 24, 11),
    array("E9", "Jesper Blomqvist", "177 cm", 25, "SWE", "V/FV/M/OM (L)", 15, "Nur Links", "12 (8)", 1, 2),
    array("E10", "Raimond van der Gouw", "190 cm", 36, "NED", "TW", 17, "Nur Rechts", "2 (1)", 0, 0)
);

$scorer = array(
    array("Spieler", "Klub", "Anzahl Tore", "Anzahl Spiele"),
    array("Alvaro Morata", "Athletico Madrid", 5, 5),
    array("Erling Haaland", "Machester City", 5, 5),
    array("Rasmus Hojlund", "Machester United", 5, 4),
    array("Harry Kane", "Bayern Munich", 5, 4),
    array("Julian Alvarez", "Machester City", 4, 4),
    array("Lois Openda", "RB Leipzig", 4, 5),
    array("Evanilson", "Porto FC", 4, 4),
    array("Antoine Griezmann", "Athletico Madrid", 4, 5),
    array("Phil Foden", "Machester City", 3, 4),
    array("Gabriel Jesus", "Arsenal", 3, 3)
);

$verletzungen = array(
    array("Spieler", "Klub", "Verletzung", "Vorraussichtlich bis"),
    array("Rafa leao", "AC Mailand", "Oberschenkel", "Mitte Dezember 23"),
    array("Jurien Timber", "Arsenal", "Knie", "Ende Januar 24"),
    array("Thomas Lemar", "Athletico Madrid", "Achillessehne", "Mitte Dezember 23"),
    array("Gavi", "Barcelona", "Kreuzband", "Ende Juli 24"),
    array("Min-Jae Kim", "Bayern München", "Hüfte", "Ende Dezember 23"),
    array("Felix Nmecha", "Borussia Dortmund", "Hüfte", "Mitte Januar 24"),
    array("Kevin de Bruyne", "Manchester City", "Oberschenkel", "Ende Dezember 23"),
    array("Casemiro", "Manchester United", "Oberschenkel", "Anfang Januar 24"),
    array("Vini Jr", "Real Madrid", "Oberschenkel", "Ende Januar 24")
);
