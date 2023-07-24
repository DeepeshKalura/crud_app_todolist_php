<?php

require_once 'config.php';


// Step 1: connect to database server

// $conn = pg_connect("host=$host dbname=$dbname user=$username password=$password")
// or die ("Could not connect to server\n");

/**
 * PDO (PHP Data Objects):

 *PDO is a database abstraction layer in PHP that provides a consistent interface for accessing various databases, including PostgreSQL.
 *It allows you to switch between different database backends easily without changing much of your code.
 *PDO supports prepared statements, which can help prevent SQL injection attacks and enhance security.
 *In the provided code, PDO is used, and it sets the error mode to PDO::ERRMODE_EXCEPTION, which means that PDO will throw exceptions when an error occurs. This allows for more robust error handling.

 * pg_connect:

 *pg_connect is a specific function provided by the PostgreSQL extension in PHP for establishing a connection to a PostgreSQL database.
 *Unlike PDO, it is specific to PostgreSQL and does not work with other databases directly.
 *It does not provide a unified interface for multiple databases.
 *pg_connect does not directly support prepared statements, so you need to take extra precautions to prevent SQL injection when using this method.
 */


try {
    $db = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}


// TODO: Implemnet the CRUD operartions

// Step 2: create new task

function creatTask($taskName)
{
    global $db;
}
