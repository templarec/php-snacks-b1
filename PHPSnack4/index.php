<?php
/*
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$classe28 = [
    array(
        "nome" => "Lorenzo",
        "cognome" => "Bernini",
        "voti" => [
            8,8,7,5,9,10,3,3
        ]
    ),
    array(
        "nome" => "Andrea",
        "cognome" => "Sabatini",
        "voti" => [
            4,7,5,9,2
        ]
    ),
    array(
        "nome" => "Ciccio",
        "cognome" => "Esposito",
        "voti" => [
            2,3,6,6,5
        ]
    ),
];

for ($i = 0 ; $i < count($classe28); $i++) {

    $somma = 0;
    for ($j = 0 ; $j < count($classe28[$i]['voti']); $j++) {
        $somma += $classe28[$i]['voti'][$j];
    }
    ?>
    <ul>
        <li>
            <?= $classe28[$i]['nome'] ?>
            <?= $classe28[$i]['cognome'] ?>
            <p><strong><?= round($media = $somma / ($j - 1), 2) ?></strong></p>
        </li>
    </ul>

<?php
}
?>