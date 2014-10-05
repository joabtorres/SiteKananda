<?

try{
	//USE PARA TESTAR CONEXÃO COM USER ADMIN
	$pdo = new PDO ("mysql:host=localhost;dbname=kanan815_kananda","kanan815_admin","KanandA2015");


	//USE PARA TESTAR CONEXÃO COM USER APP
	//$pdo = new PDO ("mysql:host=localhost;dbname=kanan815_kananda","kanan815_app","KAsite2015");
}
catch(PDOException $e){
	echo $e->getMessage();
}

//TESTE DE INSERÇÃO
$sql_i = $pdo->prepare("INSERT INTO administrador VALUES (default, 'alan', 'senha', 'email@email')");
$sql_i->execute();

//TESTE DE ATUALIZAÇÃO
//$sql_u = $pdo->prepare("UPDATE administrador SET login='cliff' WHERE id_administrador=1");
//$sql_u->execute();

//TESTE DE EXCLUSÃO
//$sql_d = $pdo->prepare("DELETE FROM administrador WHERE id_administrador=3");
//$sql_d->execute();


//TESTE DE SELEÇÃO
$sql = $pdo->prepare("SELECT * FROM administrador;");

$sql->execute();
$linha = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<table>";
foreach ($linha as $registro) {
	echo "<tr>";
	echo "<td> ID:".$registro["id_administrador"]."</td>";
	echo "<td> LOGIN:".$registro["login"]."</td>";
	echo "<td> SENHA:".$registro["senha"]."</td>";
	echo "<td> EMAIL:".$registro["email"]."</td>";
	echo "</tr>";

}

echo "</table>";


?>
