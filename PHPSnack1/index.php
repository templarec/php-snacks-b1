<?php
$basket = [
      "partita01" => [
          "home" => "Olimpia Milano",
          "scoreHome" => 18,
          "guest" => "Cantù",
          "scoreGuest" => 60
      ],
      "partita02" => [
        "home" => "Cantù",
        "scoreHome" => 42,
        "guest" => "Olimpia Milano",
        "scoreGuest" => 68
      ],
    "partita03" => [
        "home" => "Benetton Treviso",
        "scoreHome" => 52,
        "guest" => "Udine",
        "scoreGuest" => 96
    ],
    "partita04" => [
        "home" => "Udine",
        "scoreHome" => 56,
        "guest" => "Benetton Treviso",
        "scoreGuest" => 55
    ],
];

echo "<ol>";
for ($i = 1; $i <= count($basket); $i++) { ?>
    <li><?= $basket["partita0".$i]["home"] . " - ". $basket["partita0".$i]["guest"] . " | " . $basket["partita0".$i]["scoreHome"] . " - " . $basket["partita0".$i]["scoreGuest"];  ?></li>
<?php
}
echo "</ol>";
?>
