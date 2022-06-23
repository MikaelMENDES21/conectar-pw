<?php
   //Conexão com banco de dados 
require("conectar.php");

//exibir todos os registros da tabela usuario

$sqlselect = "SELECT * FROM tb_usuario";

//executar np banco

$resposta = mysqli_query($conexao, $sqlSelect);

//quantos registros tem na tabela

echo mysql_num_rows($resposta);

//exibir valores de tabela
//$campo = mysql_fetch_assoc($resposta);

//exibir
//echo $campo["nome_us"];
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Email</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

   while($linha = mysql_fetch_assoc($resposta)){
       echo"<tr>";
       echo"<td>".$linha['nome_us']."</td><td>".$linha['email_us']."</td>"
       #echo"<td>".$linha[1]."</td>""<td>".$linha[2]."</td>";
       echo"</tr>";
   }
   echo"</tbody>";
   echo"</table>";
   

?>