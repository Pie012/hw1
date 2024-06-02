document.addEventListener("DOMContentLoaded", function() {
    // Ottieni il riferimento al form di registrazione
    var registrationForm = document.getElementById("formlog");

    // Aggiungi un gestore di eventi per il submit del form
    registrationForm.addEventListener("submit", function(event) {
        // Controlla se ci sono errori di validazione dopo l'invio del form
        var errore = document.querySelector('.modal-content h2');

        if (errore) {
            // Impedisci l'invio del form
            event.preventDefault();

            // Ottieni il riferimento alla modale
            var modal = document.getElementById("modal");

            // Mostra la modale impostando lo stile display a "block"
            modal.style.display = "block";
        }
    });

    // Ottieni il riferimento al simbolo di chiusura della modale
    var closeModalButton = document.querySelector(".modal-content .close");

    // Aggiungi un gestore di eventi per chiudere la modale quando si fa clic sul simbolo di chiusura
    closeModalButton.addEventListener("click", function() {
        // Ottieni il riferimento alla modale
        var modal = document.getElementById("modal");
        
        // Nascondi la modale impostando lo stile display a "none"
        modal.style.display = "none";
    });
});

