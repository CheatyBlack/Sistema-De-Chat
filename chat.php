<?php
include("bd_conect.php");
$sql = $pdo->query("SELECT * FROM chat1");
foreach ($sql->fetchAll() as $key) {
	echo "<h3>".$key['nome']."</h3>";
	echo "<h5>".$key['mensagem']."</h5>";
}



?>