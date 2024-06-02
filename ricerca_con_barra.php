<?php
    session_start();
    include "connessione.php";

    
    $requestData = json_decode(file_get_contents('php://input'), true); /// chiedi ad anto che fa
    $searchTerm = $requestData['searchTerm']; // idem
   

    $rq = "SELECT id_prod,nome,prezzo,immagine FROM prodotti WHERE nome LIKE '%$searchTerm%'";
    $rs = mysqli_query($db,$rq);

    if($rs -> num_rows > 0){
        $prodotti = array();

        while($row = $rs-> fetch_assoc()){
        $immagine_base64 = base64_encode($row['immagine']);
        unset($row['immagine']);
        $row['immagine_base64'] = $immagine_base64;

        $prodotti[] = $row;
        }

        header('Content-Type: application/json');
        echo json_encode($prodotti);
    }
    else {
        echo "Nessun prodotto trovato.";
    }    
 
?>