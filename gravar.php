<?php
require_once "conecta.php";
$nome = $_POST["nome"];
$fone = $_POST["fone"];
$email = $_POST["email"];
$insta = $_POST["insta"];
//echo("$nome, $fone, $email, $insta");
try {
  if($nome != ""){
  $stmt = $pdo->prepare('INSERT INTO pessoas VALUES(:id, :nome, :fone, :email, :insta)');
  $stmt->execute(array(
    ':id'    => Null,
    ':nome'  => $nome,
    ':fone'  => $fone,
    ':email' => $email,
    ':insta' => $insta
  ));
  echo("<script>alert('Dados registrados com sucesso...');</script>");
  //echo $stmt->rowCount();
}else{echo("<script>alert('Dados obrigatórios não foram preenchidos...');</script>");}
}
 catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>