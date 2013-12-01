<?php
/**
*
* Der Einstiegspunkt 
*
* @author SmO
* @since 28.01.2013
*
**/

// Unsere Klassen einbinden
include 'classes/controller.php';
include 'classes/model.php';
include 'classes/view.php';

// $_GET und $_POST zusammen fügen
$request = array_merge($_GET, $_POST);

// Controller erstellen
$controller = new Controller($request);

// Inhalt ausgeben
echo $controller->display();



?>