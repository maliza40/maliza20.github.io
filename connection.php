<?php

if(isset($_REQUEST['valider']) ||isset($_REQUEST['valide'])||isset($_REQUEST['vali']) ){
    extract($_REQUEST);
    define('dns','mysql:host=127.0.0.1;dbname=exam_l2;charset=UTF8');
    define('user','root');
    define('pass','');
    try
    {
        $connexion= new PDO(dns,user,pass);
    }   
    catch(PDOExeption $e){
         echo "Erreur echec de la connexion".$e->getMessage(); 
         exit();
    }
}
   
?>
