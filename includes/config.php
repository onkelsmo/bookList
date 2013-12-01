<?php
/**
*
* bookList - configuration file
*
* @author SmO
* @since 01.12.2013
*
**/
namespace bookList;

// includes
include 'classes/controller.php';
include 'classes/model.php';
include 'classes/view.php';
include 'classes/freaky_functions.php';

// DB-Connection
$dbServer = 'localhost';
$dbUser = 'root';
$dbPaswd = '';
$dbName = 'book_list';

mysql_connect($dbServer, $dbUser, $dbPaswd) or die ("Keine Verbindung möglich!");
mysql_select_db($dbName) or die ("Die Datenbank existiert nicht!");
?>