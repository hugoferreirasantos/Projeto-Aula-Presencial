<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>S2 - Contatinhos - S2</title>
	<style type="text/css">
		.font {font-family: 'Oleo Script Swash Caps', cursive;}
	</style>
</head>
<body>
<form action="gravar.php" method="post">
	<h1 class="font">S2 - Contatinhos - S2</h1>
	<table>
		<tr>
	     <td>Nome: <input type="text" name="nome" maxlength="35"></td>
	     <td><img src="imgs/lupa.png" height="25" onclick="window.location.assign('busca.php?nome='+nome.value);">
	     </td>
      </tr>
    </table>
	<p>Fone: <input type="text" name="fone" maxlength="14"></p>
	<p>E-mail: <input type="text" name="email" maxlength="35"></p>
	<p>Insta: <input type="text" name="insta" maxlength="25"></p>
	<hr>
	<p><input type="submit" name="btGravar" value="Gravar"></p>
</form>
</body>
</html>