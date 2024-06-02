<?php
/*php che prenderà i dati dell'utente e che carichera i dati nella modale tramite array e fatch ajax in js*/
session_start();
$ID_prod = $_GET['id_prod'];
$prz = $_GET['prezzo'];     
include "connessione.php";


if (!isset($_SESSION['id'])) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Utente non loggato']);
    exit();
}

$user = $_SESSION['id'];
//echo $user;

$rq ="INSERT INTO carrello(id_user,id_prod,prezzo) VALUES ('$user', '$ID_prod', '$prz')";
$rs = mysqli_query($db,$rq);

header('Location: index_ferrari.php');
exit;

?>