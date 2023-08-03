<?php


$number = 1;

while ($number <= 120) {
echo $number . '<br>';
$number++;
}
for ($nombre = 1; $nombre <= 120; $nombre ++)
{
    echo $nombre . '<br />';
}

$beCodien = [
        'Pietro',
        'Ilias',
        'Jason',
        'Manon',
        'Nathan',
        'Pauline',
        'Rui',
        'Steeve',
        'Tim',
        'Youssef',
        'Corentin',
        'Sarah',
        'Adeline',
        'Clara',
        'Lucie',
        'Sam',
        'Abdoulaye',
        'Nicolas',
        'Robin',
        'coach'=> [
            'Maxime',
            'Nico',
        ]

];

echo '<pre>';
print_r($beCodien). ', ';
echo '</pre>';
?>