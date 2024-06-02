<?php
// Verifica se la richiesta è di tipo POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recupera i parametri POST dall'input del form
    $anno = htmlspecialchars($_POST['anno']);
    $round = htmlspecialchars($_POST['round']);
    $position = htmlspecialchars($_POST['position']);

    // Costruisce l'URL per la richiesta all'API di Ergast
    $url = 'http://ergast.com/api/f1/' . $anno . '/' . $round . '/results/' . $position . '.json';

    // Inizia una sessione cURL
    $ch = curl_init();
    
    // Imposta l'URL da recuperare
    curl_setopt($ch, CURLOPT_URL, $url);
    
    // Imposta CURLOPT_RETURNTRANSFER a 1 per restituire il risultato della richiesta come stringa
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
    // Esegue la richiesta e ottiene la risposta
    $response = curl_exec($ch);
    
    // Chiude la sessione cURL
    curl_close($ch);

    // Decodifica la risposta JSON in un array associativo
    $json = json_decode($response, true);

    // Verifica se la risposta contiene dati validi
    if ($json && isset($json['MRData']['RaceTable']['Races'][0])) {
        // Estrae i dettagli della gara dalla risposta JSON
        $gara = $json['MRData']['RaceTable']['Races'][0];
        $nomeGara = $gara['raceName'];
        $dataGara = $gara['date'];
        $vincitore = $gara['Results'][0]['Driver']['givenName'] . " " . $gara['Results'][0]['Driver']['familyName'];
        $tempoVincitore = $gara['Results'][0]['Time']['time'];

        // Crea un array con i dettagli della gara
        $result = [
            'gara' => [
                'nomeGara' => $nomeGara,
                'dataGara' => $dataGara,
                'vincitore' => $vincitore,
                'tempoVincitore' => $tempoVincitore
            ]
        ];
    } else {
        // Se la risposta non contiene dati validi, restituisce un messaggio di errore
        $result = ['error' => 'Non sono stati trovati risultati per i parametri forniti.'];
    }

    // Imposta l'intestazione Content-Type su application/json
    header('Content-Type: application/json');
    
    // Restituisce la risposta JSON
    echo json_encode($result);
} else {
    // Se il metodo di richiesta non è POST, restituisce un messaggio di errore
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Metodo di richiesta non valido.']);
}
?>
