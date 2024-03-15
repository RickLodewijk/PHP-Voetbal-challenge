<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uitslagen</title>
    <link rel="stylesheet"type="text/css" href="css/css.css">
</head>
<body>
<?php
    $uitslagen=[//array van de uitslagen
    ['thuis' => 'Feyenoord', 'uit' => 'FC Twente', 'uitslag'=> [1,2] ],
    ['thuis' => 'AZ', 'uit' => 'RKC Waalwijk', 'uitslag'=> [1,3] ],
    ['thuis' => 'PEC Zwolle', 'uit' => 'PSV', 'uitslag'=> [1,2] ],
    ['thuis' => 'Heracles Almelo', 'uit' => 'Sparta Rotterdam', 'uitslag'=> [1,3] ],
    ['thuis' => 'sc Heerenveen', 'uit' => 'Go Ahead Eagles', 'uitslag'=> [3,1] ],
    ['thuis' => 'FC Groningen', 'uit' => 'SC Cambuur', 'uitslag'=> [2,3] ],
    ['thuis' => 'Vitesse', 'uit' => 'Ajax', 'uitslag'=> [2,2] ],
    ['thuis' => 'Willem I', 'uit' => 'FC Utrecht', 'uitslag'=> [3,0] ],
    ['thuis' => 'N.E.C.', 'uit' => 'Fortuna Sittard', 'uitslag'=> [0,1] ],

    ['thuis' => 'Ajax', 'uit' => 'sc Heerenveen', 'uitslag'=> [5,0] ],
    ['thuis' => 'RKC Waalwijk', 'uit' => 'Heracles Almelo', 'uitslag'=> [2,0] ],
    ['thuis' => 'Fortuna Sittard', 'uit' => 'Vitesse', 'uitslag'=> [1,2] ],
    ['thuis' => 'Sparta Rotterdam', 'uit' => 'PEC Zwolle', 'uitslag'=> [2,0] ],
    ['thuis' => 'Go Ahead Eagles', 'uit' => 'Feyenoord', 'uitslag'=> [0,1] ],
    ['thuis' => 'SC Cambuur', 'uit' => 'Willem I', 'uitslag'=> [1,1] ],
    ['thuis' => 'PSV', 'uit' => 'N.E.C.', 'uitslag'=> [3,2] ],
    ['thuis' => 'FC Twente', 'uit' => 'FC Groningen', 'uitslag'=> [3,0] ],
    ['thuis' => 'FC Utrecht', 'uit' => 'AZ', 'uitslag'=> [2,2] ],

    ['thuis' => 'Feyenoord', 'uit' => 'PSV', 'uitslag'=> [2,2] ],
    ['thuis' => 'AZ', 'uit' => 'Ajax', 'uitslag'=> [2,2] ],
    ['thuis' => 'Vitesse', 'uit' => 'sc Heerenveen', 'uitslag'=> [1,2] ],
    ['thuis' => 'N.E.C.', 'uit' => 'Go Ahead Eagles', 'uitslag'=> [1,0] ],
    ['thuis' => 'FC Groningen', 'uit' => 'Sparta Rotterdam', 'uitslag'=> [1,2] ],
    ['thuis' => 'PEC Zwolle', 'uit' => 'FC Utrecht', 'uitslag'=> [1,1] ],
    ['thuis' => 'Willem I', 'uit' => 'Heracles Almelo', 'uitslag'=> [4,0] ],
    ['thuis' => 'FC Twente', 'uit' => 'Fortuna Sittard', 'uitslag'=> [1,2] ],
    ['thuis' => 'SC Cambuur', 'uit' => 'RKC Waalwijk', 'uitslag'=> [0,0] ],

    ['thuis' => 'N.E.C.', 'uit' => 'Fortuna Sittard', 'uitslag'=> [0,0] ],

    ];
    
    echo "<table border=solid  class='tabeleen'>";
    echo "<tr><th>Thuis</th><th>Uit</th><th></th><th></th></tr>";
    foreach ($uitslagen as $uitslag) {
    echo "<tr>";
    echo "<td class='uitslag'>".$uitslag['thuis']."</td>";
    echo "<td class='uit'>".$uitslag['uit']."</td>";
    echo "<td>".$uitslag['uitslag'][0]."</td>";
    echo "<td>".$uitslag['uitslag'][1]."</td>";
    echo "</tr>";
    }
    echo "</table>";
    
    echo "<br><br>";

    $punten=[];
    $gespeeld=[];

    foreach ($uitslagen as $uitslag) {
        $punten[$uitslag['thuis']]=0;
        $punten[$uitslag['uit']]=0;
        $gespeeld[$uitslag['thuis']]=0;
        $gespeeld[$uitslag['uit']]=0;
    }

    foreach ($uitslagen as $uitslag) { //Maakt strings aan
        $thuis = $uitslag['thuis'];
        $uit = $uitslag['uit'];
        $thuis_score = $uitslag['uitslag'][0];
        $uit_score = $uitslag['uitslag'][1];
    //Hier onder word gekeken wie heeft gewonnen en meer punten krijgt 
        if ($thuis_score > $uit_score) {
            $punten[$thuis] += 3;
        } elseif ($thuis_score < $uit_score) {
            $punten[$uit] += 3;
        } else {
            $punten[$thuis] += 1;
            $punten[$uit] += 1;
        }
    
        $gespeeld[$thuis]++;
        $gespeeld[$uit]++;
    }
    arsort($punten);
    echo "<table border=1>";
    echo "<tr><th class='club'>Club</th><th class='punten'>Punten</th><th class='gespeeld'>Gespeeld</th></tr>";
    foreach ($punten as $key => $value) {//Maakt de laaste tabel aan
        echo "<tr>";
        echo "<td class='club'>".$key."</td>";
        echo "<td class='punten'>".$value."</td>";
        echo "<td class='gespeeld'>".$gespeeld[$key]."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>

</body>
</html>