<?php

/*
 * connection_script_server - connects to the database
 * 
 *      Name: Caspian Maclean
 *      ID: 30039802
 *      Date: 8/9/2021
 *      Task: Project
 */

/* web server connection */
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }

/*コメント　Original*/
$conn;
try {
    $username = 'root';
    $password = 'Araiharuka0207@';
    $conn = new PDO(
        'mysql:host=127.0.0.1;dbname=Movies_DVDs',
        $username,
        $password,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
    );
} catch (PDOException $e) {
    // echo 'Connection failed 1: ' . $e->getMessage();
   
}

// $host = 'us-cdbr-east-04.cleardb.com';
// $db = 'heroku_d1c0b5e6ab63885';
// $user = 'b1a61e2791e094';
// $pass = 'cd9af6d4';
// $charset = 'utf8';

// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// try {
//   $conn = new PDO($dsn, $user, $pass);
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo 'Connection failed 1: ' . $e->getMessage();
//   // throw new PDOException($e->getMessage());
// }



/* home connection */
// $username = 'root';
// $password = 'usbw';
// $conn = new PDO(
//    'mysql:host=localhost;dbname=tafe_movie_project', $username, $password
// );

