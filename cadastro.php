
<?php
$conexao = mysqli_connect("localhost","root","","registros");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$username = $_POST['username'];
$senha = $_POST['senha'];


$query = "INSERT INTO cadastrouser (nome,sobrenome,email,username,senha) VALUES ('$nome','$sobrenome', '$email', '$username','$senha')";

if (mysqli_query($conexao, $query)) {
    header("Location: hall.html");
} else {
    header("Location: login.html");
}

?> 

