/// funzioni barra di ricerca a comparsa
function BarraOn(event){
    const barra = event.currentTarget;  /// gestisce l'evento


    const logo = document.querySelector('#logo');  // con questo selettore selezioniamo il div con id = logo
    logo.classList.add("nascosto");                // con add gli aggiungiamo la classe nascosto

    const cerca = document.querySelector('#barra-ricerca');
    cerca.classList.remove("nascosto");
    event.preventDefault();

}

function BarraOff(event){
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

/// fine barra di ricerca/////

/*------------Funzione per la ricerca tramite parole passate dalla barra-------------*/
function CercaProdotti(event) {
  event.preventDefault();
  console.log('bottone premuto');
  // Ottieni il valore inserito nella casella di ricerca
  //const elemento_cerca = document.getElementById('cerca').value;

  var elemento = document.getElementById('contenuto');

  // Leggiamo il valore inserito dall'utente
  var userInput = elemento.value;

  console.log(userInput);

  const url = `ricerca_prodotti_barra.php?nome=${encodeURIComponent(userInput)}`;
  window.location.href = url;
}

document.addEventListener('DOMContentLoaded', function() {
  document.querySelector("#prod-ric").addEventListener('submit', CercaProdotti);
});

/*-----------------------------------------------------------------------------------------------*/

// funzione che se passo sopra un imagine la sostiituisce con un altra nella galleria 'mouseenter' e 'mouseleave' ////
function CambioImage(event){
    const image = event.currentTarget;
    console.log('sono dentro');

    image.src = 'immagini/muso2.jpg'; 
}


const image = document.querySelector('#macchina');
image.addEventListener('mouseenter',CambioImage);



function RicambioImg(event){
    const image1 = event.currentTarget;
    console.log('sono fuori');

    image1.src = 'immagini/muso.jpg';
    
}


const image1 = document.querySelector('#macchina');
image1.addEventListener('mouseleave',RicambioImg);


//fare uno slider di immagini in modalità desktop
/// zona funzioni ///////

function slideDx(event){
    const destra = event.currentTarget;

    const contenitore = document.querySelector('#prod-item1');
    contenitore.classList.add('hidden');

    const contenitore1 = document.querySelector('#prod-item2');
    contenitore1.classList.remove('hidden');
    event.preventDefault();

}


function slideSx(event){
    const sinistra = event.currentTarget;

    const contenitore = document.querySelector('#prod-item1');
    contenitore.classList.remove('hidden');

    const contenitore1 = document.querySelector('#prod-item2');
    contenitore1.classList.add('hidden');
}

/// dichiarazione delle variabili che scatenano eventi ///

const destra = document.querySelector('#b_destra');
destra.addEventListener('click',slideDx);

const sinistra = document.querySelector('#b_sinistra');
sinistra.addEventListener('click',slideSx);

//slider immagini modalita telefono

function slideDx1(event){
    const destra = event.currentTarget;

    const contenitore = document.querySelector('#prod-item11');
    contenitore.classList.add('hidden');

    const contenitore1 = document.querySelector('#prod-item22');
    contenitore1.classList.remove('hidden');
    event.preventDefault();

}


function slideSx1(event){
    const sinistra = event.currentTarget;

    const contenitore = document.querySelector('#prod-item11');
    contenitore.classList.remove('hidden');

    const contenitore1 = document.querySelector('#prod-item22');
    contenitore1.classList.add('hidden');
}

/// dichiarazione delle variabili che scatenano eventi ///

const destra1 = document.querySelector('#b_destra');
destra1.addEventListener('click',slideDx1);

const sinistra1 = document.querySelector('#b_sinistra');
sinistra1.addEventListener('click',slideSx1);

//------ mwh3.js-----//
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("search");
    const risultatoGara = document.getElementById("risultatoGara");

    form.addEventListener("submit", function(event) {
        event.preventDefault();
        const anno = document.getElementById("anno").value;
        const round = document.getElementById("round").value;
        const position = document.getElementById("position").value;

        fetch('trovaPilota.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `anno=${anno}&round=${round}&position=${position}`
        })
        .then(response => response.json())
        .then(data => {
            const gara = data.gara;
            risultatoGara.innerHTML = `
                <h2>Dettagli gara</h2>
                <p>Nome Gran Premio: ${gara.nomeGara}</p>
                <p>Data Gran Premio: ${gara.dataGara}</p>
                <p>Vincitore: ${gara.vincitore}</p>
                <p>Tempo del Pilota: ${gara.tempoVincitore}</p>
            `;
        });
    });
});
/*mw3.js Oauth2*/

document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('spotify');
  const albumInput = document.getElementById('album');
  const albumView = document.getElementById('album-view');

  form.addEventListener('submit', function(event) {
      event.preventDefault(); // Impedisce il ricaricamento della pagina

      const albumName = albumInput.value

      fetch(`cerca_artista_spotify.php?album=${encodeURIComponent(albumName)}`)
          .then(response => response.json())
          .then(data => {
              albumView.innerHTML = ''; // Pulisce i risultati precedenti

              if (data.error) {
                  albumView.innerHTML = `<p>${data.error}</p>`;
              } else if (data.albums && data.albums.items.length > 0) {
                  data.albums.items.forEach(album => {
                      const albumDiv = document.createElement('div');
                      albumDiv.className = 'album';

                      const albumTitle = document.createElement('h3');
                      albumTitle.textContent = album.name;
                      albumDiv.appendChild(albumTitle);

                      if (album.images && album.images.length > 0) {
                          const albumImage = document.createElement('img');
                          albumImage.src = album.images[0].url;
                          albumImage.alt = `Copertina di ${album.name}`;
                          albumDiv.appendChild(albumImage);
                      } else {
                          const noImage = document.createElement('p');
                          noImage.textContent = 'Immagine di copertina non disponibile';
                          albumDiv.appendChild(noImage);
                      }

                      albumView.appendChild(albumDiv);
                  });
              } else {
                  albumView.innerHTML = `<p>Nessun album trovato per il nome "${albumName}"</p>`;
              }
          })
          .catch(error => {
              console.error('Errore:', error);
              albumView.innerHTML = `<p>Si è verificato un errore durante la ricerca.</p>`;
          });
  });
});

  /*-------modale carrello---*/
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



/*----------------------------javascritp che conterra la fetch ajax del caricamento carrello------------------------------------*/ 

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



