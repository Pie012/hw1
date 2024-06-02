<?php
$ht="localhost"  ;
$user="root";
$psw="";
$nome_db="storeferrari";    
$db=new mysqli($ht,$user,$psw,$nome_db);
if($db==false)
echo("Errore nella connessione al database");
else
//echo "connessione=".$db->host_info;  
?>