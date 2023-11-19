<?php
/**
 * Display all the errors
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Haal de configuratie op
 */
require_once '../source/config.php';

/**
 * Require de database.php. Hiervoor kun je nu de constante SOURCE_ROOT gebruiken uit het .env bestand
 */
require_once SOURCE_ROOT . 'database.php';

/**
 * Haal de database verbinding op
 */
$connection = database_connect();

/**
 * Maak een variabele aan voor de titel, dit is straks een criteria om data op te halen.
 */
$title = 'voorbeeld';

/**
 * Defineer de mysql query, plaats een ? ( vraagteken ) op de plek waar een variabele moet komen
 */
$sql = 'SELECT * FROM projects WHERE title=?';

/**
 * Bereid de query voor zodat de database server weet wat er aan gaat komen
 */
$stmt = $connection->prepare($sql);

/**
 * Geef aan wat de waarde van het vraagteken is. In dit geval een string met bijvoorbeeld 'amsterdam'
 */
$stmt->bind_param('s', $plaats);

/**
 * Voor de query uit op de server
 */
$stmt->execute();

/**
 * Haal het resultaat op
 */
$result = $stmt->get_result();

/**
 * Verwerk nu het resultaat in een array zodat ik iets met de data kan
 */
$project = mysqli_fetch_assoc($result);

 /**
 * Geef de data weer:
 */
echo '<pre style="background:#0f0; padding: 2rem; width:100%;">';
var_dump( $project );
echo '</pre>';
die(__FILE__.':'.__LINE__);