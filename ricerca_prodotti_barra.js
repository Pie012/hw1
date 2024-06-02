//------------- funzioni barra di ricerca a comparsa----------------------//
function BarraOn(event){
    const barra = event.currentTarget;  

    const logo = document.querySelector('#logo');  
    logo.classList.add("nascosto");               

    const cerca = document.querySelector('#barra-ricerca');
    cerca.classList.remove("nascosto");
    event.preventDefault();

}

function BarraOff(event){
    const barra = event.currentTarget;  

    const logo = document.querySelector('#logo');  
    logo.classList.remove("nascosto");                

    const cerca = document.querySelector('#barra-ricerca');
    cerca.classList.add("nascosto");
    event.preventDefault();

}

const barra = document.querySelector("#cerca");  
barra.addEventListener('click',BarraOn);         
const barra1 = document.querySelector("#ricerca");  
barra1.addEventListener('click',BarraOff); 
//-----------------Fine barra di ricerca a comparsa -------------------//

/*------------Funzione per la ricerca tramite parole passate dalla barra-------------*/

console.log("AOOOOO PISCHELLO");
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
            acq.href = `carica_carrello.php?id_prod=${prodotto.id_prod}&prezzo=${prodotto.prezzo} `;  /* inserisci questa riga in ogni file js */
            acq.innerHTML = 'Acquista';
            div.appendChild(acq);

            listaProdotti.appendChild(div);
        });
    } 


function ONResponse(risposta){
    console.log("sono dentro la funzione risposta");
    console.log(risposta.json);
    return risposta.json();
}



function CercaProdotti(event) {

    var Nuova_ricerca = document.getElementById('contenuto');
  
    var contenuto_nuovo = Nuova_ricerca.value;
  
   
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
    .catch(error => {console.error('Errore nella ricerca:', error)});
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
  


  /* modale carrello*/
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


