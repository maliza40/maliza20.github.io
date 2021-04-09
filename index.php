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

        $selection="SELECT * FROM commune";
        $execut=$conexion->query($selection);
        $donnees=$execut->fetchAll(PDO::FETCH_ASSOC);
         $select="SELECT * FROM agence ";
        $exec=$conexion->query($select);
        $donnee=$exec->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body bgcolor="gray">
<form method="POST" action="validiter.php">
<div style="width:100%;height:400px;background-color:black;margin-top:%;position: fixed;">	
<fieldset style="width:30%;height: 340px;background-color:#D1CDCC;margin-top:2%"><legend style="text-align:center;font-size:20px;background-color:blue   ">FORMULAIRE DE COMMUNE</legend><br><br>	
<label style="margin-left: 2.7%">NUMCOM :</label><input type="text" name="numCom" style="height:30px  "><br><br>
<label style="margin-left:3.8%">NOMCOM:</label><input type="text" name="nomCom" style="height:30px  "><br><br>
<label>SUPERFICIE:</label><input type="text" name="superficie" style="height:30px"><br><br><br><br>
<input type="submit" name="valider" value="insert" style="height:30px;margin-left:8%;width:20% "><input type="reset" name="annuler" value="annuler" style="height:30px;margin-left:38%;width:20%  ">	
</fieldset>
<fieldset style="width:30%;height: 340px;background-color:#D1CDCC;margin-top:-26.3%;margin-left:33%;position: fixed; "><legend style="text-align:center;font-size:20px;background-color:blue   ">FORMULAIRE D'AGENCE</legend><br><br>
<label style="margin-left: 2.7%">CODEAG:</label><input type="text" name="codeAg" style="height:30px  "><br><br>
<label style="margin-left:3.8%">NUMCOM:</label><select class="input" name="numC" style="width:160px "> 
<?php foreach ($donnees as $value):;?>
<option  value="<?php echo $value['numCom']; ?>" ><?php echo $value['numCom']; ?></option>
<?php  endforeach; ?>
</select><br><br>
<label style="margin-left: 3.4%">NOMAG:</label><input type="text" name="nomAg" style="height:30px"><br><br><br><br>
<input type="submit" name="valide" value="insert" style="height:30px;margin-left:8%;width:20% "><input type="reset" name="annuler" value="annuler" style="height:30px;margin-left:38%;width:20%  ">	
</fieldset>
<fieldset style="width:30%;height: 340px;background-color:#D1CDCC;margin-top:-26.3%;margin-left:66%;position: fixed; "><legend style="text-align:center;font-size:20px;background-color:blue   ">FORMULAIRE DE COMPTABLE</legend><br>
<label style="margin-left: 2.7%">NUMCOMPT:</label><input type="text" name="id_Compt" style="height:23px  "><br><br>
<label style="margin-left:8%">CODEAG :</label><select class="input" name="codeA" style="width:160px "> 
<?php foreach ($donnee as $value):;?>
<option value="<?php echo $value['codeAg']; ?>" ><?php echo $value['codeAg']; ?></option>
<?php  endforeach; ?>
</select><br><br>
<label style="margin-left: 2.7%">NOMCOMPT:</label><input type="text" name="nomCompt" style="height:23px  "><br><br>
<label style="margin-left:15%">DATE:</label><input type="date" name="dateNaiss" style="height:23px;width:44%   "><br><br>
<label style="margin-left:8%">SALAIRE:</label><input type="text" name="salaire" style="height:23px"><br><br>
<label style="margin-left:%">COMMUSION:</label><input type="text" name="commission" style="height:23px"><br><br>
<input type="submit" name="vali" value="insert" style="height:30px;margin-left:8%;width:20% "><input type="reset" name="annuler" value="annuler" style="height:30px;margin-left:38%;width:20%  ">
</fieldset>
</div>	
</form>
<iframe src="afficher.php" width="40%" height="340px" frameborder="1" style="background-color:red;margin-top:29%;position:fixed;margin-left: 5%   "></iframe>
<iframe src="affiche2.php" width="47%" height="340px" frameborder="1" style="background-color:red;margin-top:29%;position:fixed;margin-left: 46%   "></iframe>
</body>
</html>

