<?php
/**
*
* Der Einstiegspunkt 
*
* @author SmO
* @since 01.12.2013
*
**/
namespace bookList;

error_reporting(E_ALL);

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