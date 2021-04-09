<?php
if(isset($_REQUEST['valider'])||isset($_REQUEST['valide'])||isset($_REQUEST['vali'])){
    extract($_REQUEST);
    include("connection.php");
    
    $inse="INSERT INTO commune VALUES('$numCom','$nomCom','$superficie')";
    $connexion->exec($inse);
    $inset="INSERT INTO agence VALUES('$codeAg','$numC','$nomAg')";
    $connexion->exec($inset);
 $ins="INSERT INTO comptable VALUES('$id_Compt','$codeA','$nomCompt','$dateNaiss','$salaire','$commission')";
    $connexion->exec($ins);
     header("Location:index.php?"); 
     echo "string";
}
?>

