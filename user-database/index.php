 <!DOCTYPE html> 

<html>
    <head>
        <title>Meu Site</title>
</head>
<body>

    

<?php 


$user = 'root';
$pass = '';
try {
    $db = new PDO('mysql:host=localhost;dbname=meubanco', $user, $pass);
    $person = $db->query('SELECT * FROM usuario');
    forEach ($person as $row) {
        print $row['id'] . " \t";
        print $row['nome'] . "\t";
        print $row['email'] . "<br>" ; 

    }
}
catch (PDOException $e) {
    echo $e;
} 
?> 
</body>

</html>



<p>eu sou uma tag em html</p>

<h1>Para constar que a linguagem php tem o HTML integrado</h1> 
<h2>E ressaltar que todo script php deve ser escrito dentro da tag < ?php </h2> 
<h3>Enquanto a tag de php não é declarada o script suportará html</h3>
<h4>Seguindo essa lógica o script também é capaz de integrar tanto o CSS quanto o JavaScript junto ao HTML<br></4> 


<?php 
echo "<br>Essa linha foi escrita com php";

echo "<br>" . $_SERVER['HTTP_USER_AGENT'];
// a tag phpinfo() retorna todas as informações a respeito do php como: sistemas, servidores, versões e variáveis
phpinfo();

$string = 'uma grama de ação vale mais que uma tonelada de teoria';

if (str_contains($string, 'grama')) {
    echo "<br>A substring 'grama' foi achada na string";
}

if (str_contains($string, 'tonelada')) {
    echo "<br>A substring 'tonelada' foi achada na string";
}

else {
    echo "<br>A substring não foi encontrada na string";
}


if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
    echo "<br>Você está usando o Chrome!";
}


?>

             

