<?php
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");

$user = 'root';
$pass = '';

$id = $_GET["id"];


try {
    $db = new PDO('mysql:host=localhost;dbname=meubanco', $user, $pass);
    $person = $db->query('SELECT * FROM usuario WHERE id = ' . $id);
    $person = $person->fetchAll(PDO::FETCH_ASSOC);
    /*forEach ($person as $row) {
        print $row['id'] . " \t";
        print $row['nome'] . "\t";
        print $row['email'] . "<br>" ; 

    }*/
   echo json_encode($person);
}
catch (PDOException $e) {
    echo $e;
} 

?>