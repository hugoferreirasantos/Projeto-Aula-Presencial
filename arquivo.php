<?php
require_once "conecta.php";
$cor = "#ffffff";
$consulta = $pdo->query("SELECT * FROM pessoas");
$arq = "<table border=1>
        <tr>
          <td>ID</td>
          <td>NOME</td>
          <td>FONE</td>
          <td>EMAIL</td>
          <td>INSTA</td>
        </tr>
";
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    if($cor=="#ffffff"){$cor = "#cccccc";}else{$cor="#ffffff";}
 $arq .=  "<tr bgcolor=$cor>
          <td>{$linha['id']}</td>
          <td>{$linha['nome']}</td>
          <td>{$linha['fone']}</td>
          <td>{$linha['email']}</td>
          <td>{$linha['insta']}</td>
          </tr>
    ";
}
$ponteiro = fopen("relatorio.doc", "w");
fwrite($ponteiro, $arq);
fclose($ponteiro);
echo "<script>alert('Relatório gerado...');window.history.back();</script>";
?>