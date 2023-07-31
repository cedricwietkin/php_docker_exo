<html>
<head><title>Hi!</title></head>
<body>
<?php
$Name = "Cédric" ;
$Age = 34;
$colorofeyes = "blue";
$nameOfFirstPerson = "Virginie";

$team = [ 'Vincent Company', 'Eden Hazard', 'Manneken Pis' ];
$family = ["Virginie","Lucas", "Nathan"];
$recetteprefere = ["sushis","burger","carbonara","spare-ribs"];
$filmprefere =["les bronzés font du ski","20ans d'écart","skyfall","goldeneye"];
$recetteprefere [] = 'bao bun';

$user = array (
    'firstname' => 'Juan',
    'lastname' => 'Pablo',
    'adress' => '3 Paradijsestraat',
    'city' => 'Antwerpen');
array_push($recetteprefere, 'chocolat', 'lasagne', 'pizzas');

$me = array(
    'firstname' => 'Cédric',
    'lastname' => 'Wietkin',
    'age'=> 34,
    'likes_football' => false
);

$me['hobbies'] = array(
        'basket-ball',
        'crossfit',
        'code',
        'bivouac'
);

$wife = array(
        'firstname' => 'Virginie',
        'lastname'=> 'Rochus',
        'age'=> 34,
    'hobbies'=> array(
            'couture',
            'yoga',
            'vinted'

    )
);


echo '<pre>';
print_r($family);
echo '</pre>';



echo '<pre>';
print_r($recetteprefere);
echo '</pre>';


echo implode(", ", $user);
unset($me['hobbies'][2]);
echo '<pre>';
print_r($me);
echo '</pre>';

echo '<pre>';
print_r($wife);
echo '</pre>';





$names= array('John', 'jeanne', 'Joan', 'emile');
foreach ($names as $name){
    echo ucfirst($name).', ';
}
$names= array('John', 'jeanne', 'Joan', 'emile');
echo '<pre>';
print_r($names);
echo '</pre>';

foreach ($names as $key => $value){
    $names[$key] = ucfirst($value);

}
echo '<pre>';
print_r($names);
echo '</pre>';


$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
$verb = 'code';

foreach ($pronouns as $pronoun) {
    if ($pronoun === 'He/She') {
        echo $pronoun . ' codes' . '<br>';
    } else {
        echo $pronoun . ' ' . $verb . '<br>';
    }
}
$amount_of_lines = 1;

while ($amount_of_lines <= 50)
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
    // shorthand writing for
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines ++;

}


for ($amount_of_lines = 2; $amount_of_lines <= 50; $amount_of_lines+=2)
{
    echo $amount_of_lines . '. : I shall not watch flies fly when I\'m learning PHP.<br />';
}




?>
    <p>Hi! My Name is <?php echo ($Name); ?>!</p>
    <p>I'm <?php echo($Age); ?> Years old.</p>
    <p>My eyes are <?php echo ($colorofeyes); ?></p>
    <p>The first person in my family is <?php echo($nameOfFirstPerson) ?>!</p>
    <p>My wife is <?php echo($family[0]);?>, my first son call <?php echo($family[1]); ?> and my last son is <?php echo ($family[2]); ?>.</p>
    <p>My favorites meals are <?php echo implode(", ", $recetteprefere); ?>!</p>
    <p>My best film is <?php echo ($filmprefere[0]); ?>!</p>


</body>
</html>