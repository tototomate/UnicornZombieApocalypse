<?php
namespace HTLW3R\UnicornZombieApocalypse;

require_once "vendor/autoload.php";
namespace HTLW3R\UnicornZombieApocalypse;
$connectionParams = array(
    'dbname' => 'ravepage',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);
if (isset($_GET{'submit'})){
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

//create a Query Builder obejct
$queryBuilder = $conn->createQueryBuilder();

$queryBuilder
    ->insert('person')
    ->values(
        array(
            'vorname' => '?',
            'nachname' => '?',
            'geburtsdatum' => '?',
            'email' => '?',
            'shirtsize' => '?'
        )
    )
    ->setParameter(0, $_GET['vorname'])
    ->setParameter(1, $_GET['nachname'])
    ->setParameter(2,$_GET['geburtsdatum'])
    ->setParameter(3,$_GET['email'])
    ->setParameter(4,$_GET['shirtsize'])
    ->execute();
}
;?>
