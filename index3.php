<?php
$utenti = [
    ["id" => 1,
     "name" => "Lorenzo",
      "gender" => "M" ],
    [ "id" => 2,
      "name" => "Francesca",
      "gender" => "F" ],
    ["id" => 3,
        "name" => "roberta",
        "gender" => "N"]
];

foreach ($utenti as $utente) {

    if ($utente["gender"] == "M") {
        echo "Buongiorno Sig. " . $utente["name"] ."\n";
    } elseif ($utente["gender"] == "F") {
        echo "Buongiorno Sig.ra " . $utente["name"] ."\n";
    } else {
        echo "Buongiorno " . $utente["name"] ."\n";
    }
}
