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
$selection="SELECT nomCompt,salaire,commission FROM comptable WHERE salaire<=commission";
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
<h4 align="center" style="color:black">LA LISTES D'AFFICHAGE DONT LE SALAIRE <=COMMUSSION </h4>
<table align="center" border="1" style="color:white;background-color:white;border-radius:px;border-collapse:collapse; ">
<tr>
<th>NOM DE COMPTABLE</th>
<th>SALAIRES DE COMPTABLE</th>
<th>COMMUSSION</th>
</tr>
<?php
foreach ($donnees as $value):;
?>  
<tr style="text-align:center;font-size:12px;">
<td ><?php echo $value['nomCompt'];?></td>
<td><?php echo $value['salaire'];?></td>
<td><?php echo $value['commission'];?></td>    
</tr>
<?php
endforeach;
?>

</table>
</body>
</html>

