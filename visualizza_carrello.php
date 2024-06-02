<?php
    session_start();
    include "connessione.php";

    $vrq = "SELECT C.prezzo as prezzo, I.immagine,I.nome as nome FROM carrello C JOIN prodotti I ON C.id_prod = I.id_prod";
    $vrs = mysqli_query($db,$vrq);

        if($vrs->num_rows > 0){

            $prodotti = array();

            while($row = $vrs->fetch_assoc()){

                $immagine_base64 = base64_encode($row['immagine']);
                unset($row['immagine']);

                $row['immagine_base64'] = $immagine_base64;
                // Aggiungi ogni prodotto all'array

                $prodotti[] = $row;
        }

        header('Content-Type: application/json');
        echo json_encode($prodotti);
    }else{
        echo "errore nel caricamento";
    }
?>
