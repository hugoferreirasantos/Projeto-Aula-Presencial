<?php
require_once "conecta.php";
$nome = $_GET["nome"];
//echo("$nome");
$cor = "#ffffff";
$consulta = $pdo->query("SELECT * FROM pessoas WHERE nome LIKE '%".$nome."%'");
echo "<table border=1>
        <tr>
          <td>ID</td>
          <td>NOME</td>
          <td>FONE</td>
          <td>EMAIL</td>
          <td>INSTA</td>
          <td></td>
          <td></td>
        </tr>
";
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    if($cor=="#ffffff"){$cor = "#cccccc";}else{$cor="#ffffff";}
    echo "<tr bgcolor=$cor>
          <td>{$linha['id']}</td>
          <td>{$linha['nome']}</td>
          <td>{$linha['fone']}</td>
          <td>{$linha['email']}</td>
          <td>{$linha['insta']}</td>
          <td><img src=imgs/edit.png height=30></td>
          <td><a href=deletar.php?id={$linha['id']} onclick=\"return confirm('Deseja realmente apagar o registro?'); return false;\"><img src=imgs/del.png height=30></a></td>
        </tr>
    ";
}
echo"</table><br><font onclick=print();>IMPRIMIR</font> - <a href=arquivo.php>RELATORIO</a>";
?>