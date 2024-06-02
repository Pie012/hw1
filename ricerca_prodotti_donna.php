<?php 
    include "connessione.php";

    $rq = "SELECT id_prod,nome,prezzo,immagine FROM prodotti WHERE genere = 2";
    $rs = mysqli_query($db,$rq);

    if($rs->num_rows > 0){  

        $prodotti = array();

        while($row = $rs->fetch_assoc()){

            $immagine_base64 = base64_encode($row['immagine']);
            unset($row['immagine']);
    
            $row['immagine_base64'] = $immagine_base64;
            // Aggiungi ogni prodotto all'array
    
            $prodotti[] = $row;
        }

        header('Content-Type: application/json');
        echo json_encode($prodotti);
    }
    else{
        echo "errore nel caricamento";
    }
?>