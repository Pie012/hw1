/// funzioni barra di ricerca a comparsa
function BarraOn(event){
    event.preventDefault();
    const barra = event.currentTarget;  /// gestisce l'evento


    const logo = document.querySelector('#logo');  // con questo selettore selezioniamo il div con id = logo
    logo.classList.add("nascosto");                // con add gli aggiungiamo la classe nascosto

    const cerca = document.querySelector('#barra-ricerca');
    cerca.classList.remove("nascosto");
    event.preventDefault();

}

function BarraOff(event){
    event.preventDefault();
    const barra = event.currentTarget;  /// gestisce l'evento


    const logo = document.querySelector('#logo');  // con questo selettore selezioniamo il div con id = logo
    logo.classList.remove("nascosto");                // con add gli rimuoviamo la classe nascosto

    const cerca = document.querySelector('#barra-ricerca');
    cerca.classList.add("nascosto");
    event.preventDefault();

}

const barra = document.querySelector("#cerca");  //creata la costante barra è associata al selettore #cerca
barra.addEventListener('click',BarraOn);         //barra è in attesa (ascolto) dell'evento


const barra1 = document.querySelector("#ricerca");  //creata la costante barra1 è associata al selettore #ricerca
barra1.addEventListener('click',BarraOff);         //barra1 è in attesa dell'evento


/*---------FUNZIONAMENTO BARRA RICERCA----------*/


/*------------Funzione per la ricerca tramite parole passate dalla barra-------------*/
function OnJson(json){
    console.log('ciao json');
    const listaProdotti = document.getElementById('listaprd');

    // mi assicura che json sia un array di prodotti
    if (Array.isArray(json)) {
        // Cicla su ogni prodotto nel JSON
        json.forEach(prodotto => {
            const div = document.createElement('div');
            div.className = 'prodotto';

            const imgElement = document.createElement('img');
            imgElement.src = 'data:image/jpeg;base64,' + prodotto.immagine_base64;
            div.appendChild(imgElement);

            const nome = document.createElement('p');
            nome.innerText = `${prodotto.nome}`;
            div.appendChild(nome);

            const prezzo = document.createElement('p');
            prezzo.innerText = '€' + `${prodotto.prezzo}`;
            div.appendChild(prezzo);

            const acq = document.createElement('a');
            acq.href = "#";
            acq.innerHTML = 'Acquista';
            div.appendChild(acq);

            listaProdotti.appendChild(div);
        });
    } else {
        console.error('Il JSON fornito non è un array di prodotti');
    }
}

function Risposta(response){
    console.log('ciao');
    return response1.josn();
}

const url1 = 'ricerca_con_barra.php';
const response1 = fetch(url1)
    .then(Risposta)
    .then(OnJson)
    .catch(error => console.error('Errore durante la fetch:', error));


function RicaricaRicerca(event){
    event.preventDefault();
    
    const nuovaForm = document.getElementById('contenuto');

    const nuova_richiesta = nuovaForm.value;

    const urlricerca = `ricerca_con_barra.php?nome=${encodeURIComponent(nuova_richiesta)}`;
    window.location.href = urlricerca;

}

function Gestisci(event){
    event.preventDefault();
    const form = document.querySelector('form');
    form.addEventListener('submit', RicaricaRicerca);
}

document.addEventListener('DOMContentLoaded', Gestisci);







/*-------------VISUALIAZZAZIONE PRODOTTI DEL DATABASE--------------*/
function OnJson(json) {
    console.log('ciao json');
    const listaProdotti = document.getElementById('listaprd');

    // mi assicura che json sia un array di prodotti
    if (Array.isArray(json)) {
        // Cicla su ogni prodotto nel JSON
        json.forEach(prodotto => {
            const div = document.createElement('div');
            div.className = 'prodotto';

            const imgElement = document.createElement('img');
            imgElement.src = 'data:image/jpeg;base64,' + prodotto.immagine_base64;
            div.appendChild(imgElement);

            const nome = document.createElement('p');
            nome.innerText = `${prodotto.nome}`;
            div.appendChild(nome);

            const prezzo = document.createElement('p');
            prezzo.innerText = '€' + `${prodotto.prezzo}`;
            div.appendChild(prezzo);

            const acq = document.createElement('a');
            acq.href = `carica_carrello.php?id_prod=${prodotto.id_prod}&prezzo=${prodotto.prezzo} `;
            acq.innerHTML = 'Acquista';
            div.appendChild(acq);

            listaProdotti.appendChild(div);
        });
    } else {
        console.error('Il JSON fornito non è un array di prodotti');
    }
}


function OnResponse(response){
    console.log('ciao');
    return response.json();
}

const url = 'ricerca_prodotti_bambini.php';
const response = fetch(url)
    .then(OnResponse)
    .then(OnJson)
    .catch(error => console.error('Errore durante la fetch:', error));

/*-----------------------------------------BARRA RICERCA -----------------------------*/
function onJson(json){
    console.log("entro nell'OnJson"); 

    const listaProdotti = document.getElementById('listaprd');

        // Cicla su ogni prodotto nel JSON
        json.forEach(prodotto => {
            const div = document.createElement('div');
            div.className = 'prodotto';

            const imgElement = document.createElement('img');
            imgElement.src = 'data:image/jpeg;base64,' + prodotto.immagine_base64;
            div.appendChild(imgElement);

            const nome = document.createElement('p');
            nome.innerText = `${prodotto.nome}`;
            div.appendChild(nome);

            const prezzo = document.createElement('p');
            prezzo.innerText = '€' + `${prodotto.prezzo}`;
            div.appendChild(prezzo);

            const acq = document.createElement('a');
            acq.href = `carica_carrello.php?id_prod=${prodotto.id_prod}&prezzo=${prodotto.prezzo}`;  /* inserisci questa riga in ogni file js */
            acq.innerHTML = 'Acquista';
            div.appendChild(acq);

            listaProdotti.appendChild(div);
        });
    } 


function ONResponse(risposta){
    console.log("sono dentro la funzione risposta");
    return risposta.json();
}


function CercaProdotti(event) {

    var Nuova_ricerca = document.getElementById('contenuto');
  
    var contenuto_nuovo = Nuova_ricerca.value;
  
   console.log(contenuto_nuovo);
    const apiUrl = 'ricerca_con_barra.php';
  
    const risposta = fetch(apiUrl, {
        method: 'POST', 
        headers: {
            'Content-Type': 'application/json' 
        },
        body: JSON.stringify({ searchTerm: contenuto_nuovo}) // Includi il termine di ricerca nel corpo come JSON
    })
    .then(ONResponse)
    .then(onJson)
    .catch(error => {console.error('Errore nella ricerca:', error);});
  }
 // console.log("ciaooo");

  CercaProdotti();
  
  function riCercaProdotti(event) {
    event.preventDefault();
    console.log('bottone premuto');
    // Ottieni il valore inserito nella casella di ricerca
    //const elemento_cerca = document.getElementById('cerca').value;
  
    const Nuova_ricerca = document.getElementById('contenuto');
  
    // Leggiamo il valore inserito dall'utente
   const contenuto_nuovo = Nuova_ricerca.value;
  
    const urlricerca = `ricerca_prodotti_barra.php?nome=${encodeURIComponent(contenuto_nuovo)}`;
    window.location.href = urlricerca;
  }
  
  
  document.addEventListener('DOMContentLoaded', function() {
  document.querySelector('#prod-ric').addEventListener('submit', riCercaProdotti);
  });



/*------------------------MODALE CARELLO----------------------- */
    document.addEventListener('DOMContentLoaded', function() {
        var modal = document.getElementById('myModal');
        var btn = document.getElementById('openModalBtn');
        var span = document.getElementsByClassName('close')[0];
    
        btn.onclick = function() {
            modal.style.display = 'block';
            setTimeout(() => {
                modal.style.right = '0';
            }, 10); // Delay for transition effect
        }
    
        span.onclick = function() {
            modal.style.right = '-500px';
            setTimeout(() => {
                modal.style.display = 'none';
            }, 500); // Wait for the transition to complete
        }
    
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.right = '-500px';
                setTimeout(() => {
                    modal.style.display = 'none';
                }, 500); // Wait for the transition to complete
            }
        }
    });



    /*---------------------visualizzazione prodotti nella modale---------------------------- */
console.log("sto entrando nel carrello");
function OnJsonC(json) {
    const listaProdotti1 = document.getElementById('listaprd1');
    var totale = 0;
    const valore_tot = document.getElementById('valore');
json.forEach(prodotto => {
    const div1 = document.createElement('div');
    div1.className = 'prodotto1';

    const immagine = document.createElement('div');
    immagine.className = 'immagine';
    
    const imgElement = document.createElement('img');
    imgElement.src = 'data:image/jpeg;base64,' + prodotto.immagine_base64;
    immagine.appendChild(imgElement);

    const descrizione = document.createElement('div');
    descrizione.className = 'descrizione';

    const descr_prod = document.createElement('div');
    descr_prod.className = 'descrizione_prod';

    //const descr_taglie = document.createElement('div');
    //descr_taglie.className = 'descrizione_taglie';

    const nome = document.createElement('b');
    nome.innerText = 'Nome prodotto:';
    descr_prod.appendChild(nome);

    const nome1 = document.createElement('p');
    nome1.innerText = `${prodotto.nome}`;
    descr_prod.appendChild(nome1);

    const prezzo1 = document.createElement('b');
    prezzo1.innerText = 'Prezzo prodotto:';
    descr_prod.appendChild(prezzo1);

    const prezzo = document.createElement('p');
    prezzo.innerText = '€' + `${prodotto.prezzo}`;
    descr_prod.appendChild(prezzo);

    totale = totale + parseFloat(prodotto.prezzo);

    descrizione.appendChild(descr_prod);
    div1.appendChild(descrizione);
    div1.appendChild(immagine);

    listaProdotti1.appendChild(div1);

    
    
});
    console.log(totale);
    
    const tot = document.createElement('span');
    tot.innerHTML = totale;
    valore_tot.appendChild(tot);
      
}/* fai un altro div dove inserisci il il prezzo e il nome 
poi metti il flex direction in row */


function OnResponseC(C_response){
    //console.log('ciao');
    return C_response.json();
}

const urlC = 'visualizza_carrello.php';
const C_response = fetch(urlC)
    .then(OnResponseC)
    .then(OnJsonC)
    .catch(error => console.error('Errore durante la fetch:', error));


