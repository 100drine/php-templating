<?php
/*require_once 'vendor/autoload.php';

$loader = new Twing_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader,array(
 'cache' => false   
));
$faker = Faker\Factory::create ('fr_FR');*/

require_once "vendor/autoload.php"; 
$loader = new Twig_Loader_Filesystem('templates'); 
$twig = new Twig_Environment($loader, array(
'cache' =>false)); 
$faker = Faker\Factory::create('fr_FR');


echo $twig->render('index.twig.html',[
    'jour' => $faker-> dayOfWeek($max = 'now'),
    'productName' => $faker-> catchPhrase(),
    'Price' => $faker ->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100)." euros",
    'Agence' => $faker ->company(),
    'pays'=> $faker->region(),
    'job'=> $faker->jobTitle(),
    'tel'=> $faker->phoneNumber(),
    'mail'=> $faker->email(),
    'adresse'=>$faker->address(),
]); 

?>

