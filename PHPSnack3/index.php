<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


echo "<ul>";
foreach ($posts as $indice => $valore) { ?>
    <li> <h3><?= $indice ?></h3>
        <ul>
            <?php
                    for ($j = 0 ; $j < count($valore); $j++) { ?>
                        <li>
                            <h4>
                                Titolo: <?= $valore[$j]['title'] ?>
                            </h4>
                            <h5>
                                Autore: <?= $valore[$j]['author'] ?>
                            </h5>
                            <p>
                                <?= $valore[$j]['text'] ?>
                            </p>
                        </li>
                    <?php } ?>
        </ul>
    </li>
<?php
}
echo "</ul>";
?>