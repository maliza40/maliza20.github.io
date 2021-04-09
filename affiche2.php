<?php
 define('dns','mysql:host=127.0.0.1;dbname=exam_l2;charset=UTF8mb4');
        define('user','root');
        define('pass','');
        try
        {
            $conexion= new PDO(dns,user,pass);
          
        }   
        catch(PDOExeption $e){
             echo "Erreur echec de la connexion".$e->getMessage();
             exit();
        }
$selection="SELECT codeAg,nomCompt,salaire FROM comptable WHERE salaire between 1000000 and 1500000";
$execut=$conexion->query($selection);
$donnees=$execut->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
    td{
        text-align: center;
        color:black;
    }
    th{
        color:black;
        background-color:orange;
        border-radius:px;
    }
</style>
</head>
<body bgcolor="#D1CDCC">
<h4 align="center" style="color:black">LA LISTES D'AFFICHAGE DONT LE SALAIRE COMPRIS ENTRE 1000000 et 1500000</h4>
<table align="center" border="1" style="color:white;background-color:white;border-radius:px;border-collapse:collapse; ">
<tr>
<th>NOM DE COMPTABLE</th>
<th>SALAIRES DE COMPTABLE</th>
<th>SALAIRES DE COMPTABLE</th>
</tr>
<?php
foreach ($donnees as $value):;
?>  
<tr style="text-align:center;font-size:12px;">
<td ><?php echo $value['codeAg'];?></td>
<td><?php echo $value['nomCompt'];?></td>
<td><?php echo $value['salaire'];?></td>    
</tr>
<?php
endforeach;
?>

</table>
</body>
</html>

