    <!DOCTYPE html>

    <?php 
        session_start();
        $name = isset($_GET["name"]) ? $_GET["name"] : null;

        $id_u = isset($_GET["id"]) ? $GET["id"] : null;
    ?>

    <html>

    <div class="nascosto">
        <p id="id_user"><?php echo $id_u;?></p>
    </div>

    <head>
        <meta charset="utf-8">
        <title>Shop-Ferrari</title>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="prodotti_udb.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="prodotti_u.js" defer></script>
    </head>

    <body>
        <header>
            <div id="contenitore">
                <!--classe 1-->
                <div class="info-item1">
                    <a href="">
                        <span class="material-symbols-outlined">
                            language
                        </span>
                    </a>
                    <a href="">
                        <span class="material-symbols-outlined">
                            pin_drop
                        </span>
                    </a>
                </div>

                <!-- classe 2-->
                <div class="info-item2">
                    <a id="logo" href="index_ferrari.php">
                        <img src="immagini/ferrari-logo-white.png" alt="">
                    </a>
                    <div id="barra-ricerca" class="nascosto">
                        <form method="post" id="prod-ric">
                            <input type="text" id="contenuto" placeholder="Cerca" value="<?php echo "$name"; ?>">
                            <input id="btn-cerca" type="submit" value="Cerca">
                        </form>
                        <a id='ricerca'>Annulla</a>
                    </div>
                </div>

                <!--- classe 3 --->
                <div class="info-item3">
                    <a href="">
                        <span id="cerca" class="material-symbols-outlined">
                            search
                        </span>
                    </a>
                    <?php
                    if(isset($_SESSION["email"]) && (isset($_SESSION["password"]))){
                        echo '<a href="logout.php">
                                    <span class="material-symbols-outlined">logout</span>
                            </a>';
                    }
                    else{
                        echo '<a href="login_ferrari.php">
                                <span class="material-symbols-outlined">account_circle</span>
                            </a>';
                    }
                    ?>
                    <!------------------------Carrello modale inizio------------------------>
                    <div class="button-container">
                        <button id="openModalBtn">
                            <a>
                                <span class="material-symbols-outlined">
                                    shopping_bag
                                </span>
                            </a>
                        </button>
                    </div>

                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h1>Carrello</h1>
                            <div class="box_prodotti1">
                                <div class="prodotti1" id="listaprd1">

                                </div>
                                <div class="btn-die">
                                    <div class='btn-style'>
                                        <a class="paga" href="svuota_carello.php">PAGA</a>
                                    </div>

                                    <div id='valore'>
                                        <b>TOTALE: €</b>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------------fine carrello modale------------------------------>
            </div>
            </div>
            <div id="buttons">
                <a class="button" href="">Novità</a>
                <a class="button" href="prodotti_replica.php">Replica</a>
                <a class="button" href="prodotti_uomo.php">Uomo</a>
                <a class="button" href="prodotti_donna.php">Donna</a>
                <a class="button" href="prodotti_bambini.php">Bambini</a>
                <a class="button" href="">Regali</a>
                <a class="button" href="">Occhiali</a>
                <a class="button" href="">Collectibles</a>
                <a class="button" href="">Focus on</a>
            </div>
        </header>


        <body>
            <div class="box_prodotti">
                <h1>Uomo</h1>
                <div class="prodotti" id="listaprd">

                </div>
            </div>
        </body>



        <footer>
            <div id="general-information">
                <div class="lista1">
                    <div class="lista1-elm1">
                        <a href="">SHOP IN ITALY:
                            <a class="button" href="">Italy</a>
                        </a>
                    </div>
                    <div class="lista1-elm2">
                        <div class="lista1-elm1">
                            <a class="button">
                                Trova lo Store più vicino
                            </a>
                        </div>
                    </div>
                    <div class="lista1-elm2">
                        <a class="button" href="">www.ferrari.it</a>
                    </div>
                </div>
                <div class="lista2">
                    <div class="lista2-elm1">
                        <p>SERVIZI ESCLUSIVI ESCLUSIVI</p>
                    </div>
                    <div class="lista2-elm2"><a class="button" href="">servizi in store</a></div>
                    <div class="lista2-elm2"><a class="button" href="">prenota un appuntamento</a></div>
                    <div class="lista2-elm2"><a class="button">ritiro e reso in store</a></div>
                </div>
                <div class="lista3">
                    <div class="lista3-elm1">
                        <p>SERVIZIO CLIENTI</p>
                    </div>
                    <div class="lista3-elm2"><a class="button" href="">Overview</a></div>
                    <div class="lista3-elm2"><a class="button" href="">Spedizioni</a></div>
                    <div class="lista3-elm2"><a class="button">Cambi e Resi gratuiti</a></div>
                    <div class="lista3-elm2"><a class="button">Segui il tuo ordine</a></div>
                    <div class="lista3-elm2"><a class="button">Contattaci</a></div>
                </div>
                <div class="lista4">
                    <div class="lista4-elm1">
                        <p>SERVIZIO CLIENTI</p>
                    </div>
                    <div class="lista4-elm2"><a class="button" href="">Overview</a></div>
                    <div class="lista4-elm2"><a class="button" href="">Spedizioni</a></div>
                    <div class="lista4-elm2"><a class="button">Cambi e Resi gratuiti</a></div>
                    <div class="lista4-elm2"><a class="button">Segui il tuo ordine</a></div>
                    <div class="lista4-elm2"><a class="button">Contattaci</a></div>
                    <div class="lista4-elm2"><a class="button">Contattaci</a></div>
                </div>
            </div>
            <div id="payments">
                <div class="pay-icon">
                    <div class="text-pay">
                        <span class="text-p">Pagamenti sicuri con:</span>
                        <div class="icon-pay"><svg xmlns="http://www.w3.org/2000/svg" width="57" height="18">
                                <g fill="#FFF" fill-rule="evenodd">
                                    <path
                                        d="M16.95 0L12 12.75l-.45-2.4v-.15l-1.5-8.4C9.9.75 9.15.3 7.95.3H0v.75c1.5.3 3.15.6 4.5 1.2.45.15.6.6.75.9L9.45 18h4.65l7.5-18h-4.65zM19.95 18h4.65l3-18h-4.8zM41.25.75C40.2.3 38.85 0 37.5 0c-2.1 0-3.9.6-5.25 1.65-1.35 1.05-2.1 2.4-2.1 4.2 0 1.8 1.2 3.45 3.75 4.65.75.45 1.35.75 1.8 1.05.3.3.45.6.45 1.05 0 .6-.3.9-.75 1.2-.6.3-1.2.45-1.8.45-1.5 0-2.85-.3-4.05-.9l-.6-.3-.6 3.9c1.35.6 2.85.9 4.8.9 2.25 0 4.05-.45 5.4-1.65 1.35-1.05 2.1-2.55 2.1-4.35 0-1.95-1.2-3.45-3.6-4.65-.9-.45-1.5-.9-1.8-1.2-.3-.3-.6-.6-.6-1.05 0-.45.15-.75.6-1.05.45-.3 1.05-.45 1.8-.45 1.2 0 2.25.15 3.3.6l.45.45.45-3.75zM52.8.3h-3.3c-1.2 0-1.95.45-2.25 1.5L40.8 17.7h4.65l.9-2.55h5.55c.15.45.3 1.35.45 2.55h4.05L52.8.3zm-5.4 10.95c.3-.6.75-2.25 1.8-4.8v-.3c.15-.15.3-.45.3-.75.15-.3.15-.45.3-.75l.3 1.5 1.05 4.95-3.75.15z" />
                                </g>
                            </svg></div>
                        <div class="icon-pay"><svg xmlns="http://www.w3.org/2000/svg" width="38" height="30">
                                <g fill="#FFF" fill-rule="evenodd">
                                    <path
                                        d="M36.15 19.05v-.45H36v.3l-.15-.3h-.15v.45h.15v-.3l.15.3.15-.3v.3zm-.75 0v-.3h.15v-.15h-.3v.15h.15v.3zM7.8 27.45c0-.45.45-.9.9-.9s.9.45.9.9-.45.9-.9.9c-.45.15-.9-.3-.9-.9 0 .15 0 0 0 0zm2.4 0v-1.5h-.6v.3c-.3-.3-.6-.45-.9-.45-.9 0-1.5.75-1.5 1.5s.75 1.5 1.5 1.5c.3 0 .75-.15.9-.45v.3h.6v-1.2zm22.2 0c0-.45.45-.9.9-.9s.9.45.9.9-.45.9-.9.9c-.6.15-.9-.3-.9-.9 0 .15 0 0 0 0zm3.45 1.2s.15 0 0 0c.15.15.15.15 0 0l.15.15.15.15-.15-.15v.15l-.15-.3zm0 .45H36c.15-.15.15-.15 0-.3h-.15H35.4c-.15.15-.15.15 0 .3h.45c-.15 0 0 0 0 0zm0-.6c.15 0 .15 0 .15.15v.6c0 .15 0 0-.15 0h-.15c-.15 0-.3 0-.3-.15v-.3-.15c.3 0 .3 0 .45-.15-.15 0 0 0 0 0zm-1.05-1.05v-2.7h-.6v1.5c-.3-.3-.6-.45-.9-.45-.9 0-1.65.75-1.65 1.5s.75 1.5 1.65 1.5c.3 0 .75-.15.9-.45v.3h.6v-1.2zm-16.5-.9c.45 0 .75.3.75.75H17.4c.15-.45.45-.75.9-.75zm0-.6c-.9 0-1.5.75-1.5 1.65 0 .9.75 1.5 1.65 1.5.45 0 .9-.15 1.2-.45l-.3-.45c-.3.15-.6.3-.9.3-.45 0-.9-.3-.9-.75h2.25v-.3c0-.9-.6-1.5-1.5-1.5zm7.95 1.5c0-.45.45-.9.9-.9s.9.45.9.9-.45.9-.9.9c-.45.15-.9-.3-.9-.9 0 .15 0 0 0 0zm2.4 0v-1.5h-.6v.3c-.3-.3-.6-.45-.9-.45-.9 0-1.65.75-1.65 1.5s.75 1.5 1.65 1.5c.3 0 .75-.15.9-.45v.3h.6v-1.2zm-6.15 0c0 .9.6 1.5 1.5 1.5h.15c.45 0 .75-.15 1.05-.3l-.3-.6c-.3.15-.45.3-.75.3-.45 0-.9-.45-.9-1.05 0-.45.45-.9.9-.9.3 0 .6.15.75.3l.3-.6c-.3-.3-.75-.3-1.05-.3-.9 0-1.5.6-1.65 1.5v.15zm8.55-1.5c-.3 0-.6.15-.75.45v-.3h-.6v3h.6v-1.65c0-.45.15-.75.6-.75h.45l.15-.6c-.15-.15-.3-.15-.45-.15zm-17.55.3c-.3-.15-.75-.3-1.2-.3-.75 0-1.2.3-1.2.9 0 .45.3.75 1.05.9h.3c.3 0 .45.15.45.3s-.3.3-.75.3c-.3 0-.75-.15-1.05-.3l-.3.45c.3.3.9.45 1.35.45.9 0 1.35-.45 1.35-.9s-.45-.75-1.05-.9h-.3c-.3 0-.45-.15-.45-.3s.15-.3.6-.3c.3 0 .6.15.9.3l.3-.6zm8.4-.3c-.3 0-.6.15-.75.45v-.3h-.6v3h.6v-1.65c0-.45.15-.75.6-.75h.45l.15-.6c-.15-.15-.3-.15-.45-.15zm-5.55 0H15.3v-.9h-.6v.9h-.6v.6h.6v1.35c0 .75.3 1.05 1.05 1.05.3 0 .6 0 .9-.3l-.15-.6c-.15.15-.3.15-.6.15s-.45-.15-.45-.45V26.4h1.05v-.45h-.15zm-9.75 3V27c0-.6-.45-1.2-1.05-1.2H5.4c-.45 0-.75.15-1.05.6-.15-.3-.6-.6-1.05-.6-.3 0-.75.15-.9.45v-.3h-.6v3h.6V27.3c0-.45.3-.75.6-.75h.15c.45 0 .6.3.6.75v1.65h.75V27.3c0-.45.3-.75.6-.75h.15c.45 0 .6.3.6.75v1.65h.75zM18.3 3.45c-2.55 2.1-4.05 5.25-4.05 8.55 0 3.3 1.5 6.45 4.05 8.55 2.55-2.1 4.05-5.25 4.05-8.55 0-3.3-1.5-6.45-4.05-8.55" />
                                    <path
                                        d="M.15 12c0 6.15 4.95 11.1 11.1 11.1 2.4 0 4.8-.75 6.6-2.25-2.7-2.25-4.2-5.4-4.2-8.85 0-3.45 1.5-6.6 4.2-8.85A10.65 10.65 0 0011.25.9C5.25.9.15 5.85.15 12M36.45 12C36.45 5.85 31.5.9 25.35.9c-2.4 0-4.8.75-6.6 2.25 2.7 2.25 4.2 5.4 4.2 8.85 0 3.45-1.5 6.6-4.2 8.85 1.95 1.5 4.2 2.25 6.6 2.25 6.15 0 11.1-4.95 11.1-11.1" />
                                </g>
                            </svg></div>
                        <div class="icon-pay"><svg xmlns="http://www.w3.org/2000/svg" width="38" height="30">
                                <g fill="#FFF" fill-rule="evenodd">
                                    <path d="M28.05 18h3c.45-.15.9-.6.9-1.2s-.45-1.05-.9-1.2h-3V18z" />
                                    <path
                                        d="M30.45 1.35c-2.55 0-4.5 1.95-4.5 4.5v4.8h6.9c1.5.15 2.55.9 2.55 2.1 0 1.05-.75 1.95-2.1 2.1 1.5.15 2.55.9 2.55 2.25s-1.2 2.25-2.85 2.25h-7.05v9.3h6.6c2.55 0 4.5-2.1 4.5-4.5V1.35h-6.6z" />
                                    <path
                                        d="M31.65 13.05c0-.6-.45-1.05-.9-1.05H28.05v2.25H30.75c.45-.15.9-.6.9-1.2M5.25 1.35C2.7 1.35.75 3.3.75 5.85V17.1c1.35.6 2.55 1.05 3.9 1.05 1.65 0 2.4-.9 2.4-2.25v-5.25h3.9v5.25c0 2.1-1.35 3.75-5.55 3.75-2.7 0-4.65-.6-4.65-.6v9.6h6.6c2.55 0 4.5-2.1 4.5-4.5V1.35h-6.6zM17.85 1.35c-2.55 0-4.5 1.95-4.5 4.5v6c1.2-1.05 3.15-1.65 6.3-1.5 1.65.15 3.6.6 3.6.6v1.95c-.9-.45-2.1-.9-3.45-1.05-2.4-.15-3.9 1.05-3.9 3.15 0 2.1 1.5 3.3 3.9 3.15 1.35-.15 2.55-.6 3.45-1.05v1.95s-1.8.45-3.6.6c-3.15.15-5.25-.45-6.3-1.5v10.5h6.6c2.55 0 4.5-2.1 4.5-4.5V1.35h-6.6z" />
                                </g>
                            </svg></div>
                        <div class="icon-pay"><svg xmlns="http://www.w3.org/2000/svg" width="57" height="20">
                                <g fill="#FFF" fill-rule="evenodd">
                                    <path
                                        d="M23.55 0v6.6h1.65V4.2h.75l1.95 2.25h1.95l-2.1-2.4c.9-.15 1.8-.75 1.8-1.95C29.55.75 28.5 0 27.3 0h-3.75zm1.65 1.5h1.95c.45 0 .75.3.75.75s-.3.75-.6.75h-1.95l-.15-1.5zM30.15 6.6h1.65V0h-1.65zM35.85 6.6h-.45c-1.65 0-2.85-1.35-2.85-3.3 0-1.95 1.05-3.3 3.3-3.3h1.8v1.5H35.7c-.9 0-1.5.75-1.5 1.8 0 1.35.75 1.8 1.8 1.8h.45l-.6 1.5zM39.3 0l-2.85 6.6h1.8l.45-1.35h3l.45 1.35h1.95L41.55 0H39.3zm1.05 1.5l.9 2.25h-1.8l.9-2.25zM44.55 6.6V0h1.95l2.7 4.2V0h1.65v6.6H48.9l-2.7-4.35V6.6zM12 18v-6.6h5.25v1.65H13.5v1.05h3.75v1.35H13.5v1.2h3.75V18zM38.1 18v-6.6h5.25v1.65h-3.6v1.05h3.6v1.35h-3.6v1.2h3.6V18zM17.55 18l2.55-3.15-2.7-3.45h2.1l1.65 2.25 1.5-2.25h1.95l-2.55 3.45L24.6 18h-2.1L21 16.05 19.5 18zM24.9 11.4V18h1.65v-2.1h1.65c1.5 0 2.55-.75 2.55-2.25 0-1.2-.9-2.25-2.25-2.25h-3.6zm1.5 1.65h1.8c.45 0 .75.3.75.75s-.3.75-.75.75h-1.8v-1.5zM31.5 11.4V18h1.65v-2.25h.75L35.85 18h1.95l-2.1-2.4c.9-.15 1.8-.75 1.8-1.95 0-1.35-1.05-2.1-2.25-2.1H31.5v-.15zm1.5 1.65h1.95c.45 0 .75.3.75.75s-.45.75-.75.75H33v-1.5c.15 0 0 0 0 0zM44.25 18v-1.35h3.3c.45 0 .75-.3.75-.45 0-.3-.15-.6-.75-.6h-1.5c-1.35 0-1.95-.75-1.95-1.95 0-1.05.75-2.1 2.7-2.1h3.15l-.75 1.5h-2.7c-.45 0-.75.3-.75.45 0 .3.15.6.6.6h1.5c1.35 0 1.95.75 1.95 1.95s-.75 2.1-2.1 2.1L44.25 18zM50.1 18v-1.35h3.3c.45 0 .75-.3.75-.45 0-.3-.15-.6-.75-.6h-1.5c-1.35 0-1.95-.75-1.95-1.95 0-1.05.75-2.1 2.55-2.1h3.15l-.75 1.5h-2.85c-.45 0-.75.3-.75.45 0 .3.15.6.6.6h1.5c1.35 0 1.95.75 1.95 1.95s-.75 2.1-2.1 2.1L50.1 18zM3.75 1.5l.9 2.25h-1.8l.9-2.25zM2.85 0L0 6.6h1.8l.45-1.35h3L5.7 6.6h1.95L4.95 0h-2.1zM13.5 0L12 4.2 10.5 0H7.95v6.6H9.6V1.65l1.8 4.95h1.35l1.65-4.95V6.6h1.8V0zM17.25 0v6.6h5.4V5.1H18.9V4.05h3.6v-1.5h-3.6V1.5h3.75V0z" />
                                </g>
                            </svg></div>
                        <div class="icon-pay"><svg xmlns="http://www.w3.org/2000/svg" width="66" height="18">
                                <g fill="#FFF" fill-rule="nonzero">
                                    <path
                                        d="M54.3 10.05c-.15.9-.9 1.35-1.8 1.35-.75 0-1.5-.6-1.05-1.5.45-.75 1.5-.9 2.25-.9h.9c-.15.45-.15.75-.3 1.05zm-.3-7.2c-1.65 0-3 .45-4.05.6L49.65 6c.45-.3 2.1-.75 3.45-.75s2.1.3 1.8 1.35c-4.05 0-6.75.9-7.2 3.45-.75 4.35 4.05 4.35 6 2.4l-.3 1.05H57l1.5-7.05c.75-3-1.95-3.75-4.5-3.6zM61.65 0l-3 13.5h3.6l3-13.5zM45 4.65c-.3 1.05-1.2 1.8-2.25 1.8h-1.8l.75-3.75h1.95c1.05.15 1.5.9 1.35 1.95zM45.15 0h-6.6l-3 13.5h3.9L40.5 9h2.7c2.7 0 4.95-1.65 5.55-4.35.6-3.15-1.8-4.65-3.6-4.65zM19.65 10.05c-.15.9-.9 1.35-1.8 1.35-.75 0-1.5-.6-.9-1.5.45-.75 1.5-.9 2.1-.9h.9c-.15.45-.15.75-.3 1.05zm-.15-7.2c-1.65 0-3 .45-3.9.6L15.15 6c.45-.3 2.1-.75 3.45-.75s2.1.3 1.8 1.35c-3.9 0-6.6.9-7.2 3.45-.75 4.35 4.05 4.35 5.85 2.4l-.3 1.05h3.6l1.5-7.05c.75-3-1.95-3.75-4.35-3.6zM25.5 3h3.6l.6 6.3L33.15 3h3.6l-8.4 15h-3.9L27 13.65zM10.5 4.65c-.3 1.05-1.2 1.8-2.25 1.8h-1.8l.9-3.75H9.3c.9.15 1.5.9 1.2 1.95zM10.65 0h-6.6l-3 13.5h3.9l.9-4.5H8.7c2.7 0 4.8-1.65 5.4-4.35C14.85 1.5 12.6 0 10.65 0z" />
                                </g>
                            </svg></div>
                        <div class="icon-pay"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px"
                                width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50"
                                xml:space="preserve">
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M47.991,14.75c0.008-1.632-1.634-1.169-2.813-1.324C45.1,11.095,45.877,9.608,44.159,9.9   c-3.142,0.535-7.968,1.608-14.479,3.217c-3.813,0.05-11.388,0.1-15.264,0.263c-0.063,0.008-0.126,0.023-0.186,0.045   c-0.054,0.008-0.108,0.021-0.16,0.038c-0.063,0.032-0.122,0.072-0.176,0.118c-0.042,0.026-0.083,0.055-0.122,0.087   c-0.052,0.06-0.097,0.126-0.133,0.197c-0.025,0.033-0.048,0.067-0.067,0.104c-0.049,0.115-0.074,0.238-0.075,0.363v12.842   c-0.294,0.131-0.612,0.199-0.934,0.199c-1.095-0.009-2.148,0.416-2.93,1.181l-0.73,0.612c-0.353,0.295-1.277,1.412-1.737,1.412   H2.001v1.912h5.167c0.911,0,2.272-1.277,2.97-1.86l0.791-0.669c0.435-0.432,1.022-0.675,1.636-0.677   c1.122,0.003,2.199-0.441,2.99-1.235l2.43-2.424c0.241-0.255,0.603-0.358,0.942-0.27c0.34,0.089,0.604,0.357,0.687,0.697   c0.083,0.342-0.027,0.7-0.288,0.936l-5.558,5.729c-0.175,0.202-0.271,0.462-0.27,0.728c0,0.528,0.429,0.957,0.958,0.957H24.6   l-3.833,3.822H2.001v1.912h19.163c0.254,0,0.498-0.102,0.677-0.281l5.469-5.453h19.724c0.529,0,0.958-0.429,0.958-0.957V19.673   C47.991,17.895,48.009,16.281,47.991,14.75z M43.201,11.695v1.681h-9.143C37.139,12.898,40.187,12.338,43.201,11.695z    M15.415,15.288h2.738c-0.351,1.337-1.397,2.382-2.738,2.731V15.288z M16.661,32.49l1.034-1.073   c0.208,0.332,0.364,0.694,0.461,1.073H16.661z M46.075,32.49h-2.738c0.351-1.338,1.397-2.381,2.738-2.73V32.49z M46.075,27.798   c-2.407,0.41-4.293,2.292-4.704,4.692H20.12c-0.149-0.898-0.514-1.747-1.064-2.475l1.639-1.687c0.54-0.538,0.843-1.268,0.843-2.028   c0-0.762-0.303-1.492-0.843-2.029c-1.123-1.12-2.942-1.12-4.064,0l-1.215,1.215V19.98c2.407-0.41,4.293-2.291,4.704-4.692h21.252   c0.411,2.401,2.297,4.282,4.704,4.692V27.798z M46.075,18.019c-1.341-0.35-2.388-1.394-2.738-2.731h0.822h1.916V18.019z" />
                                    <path fill="#FFFFFF"
                                        d="M30.745,17.199c-3.704,0-6.707,2.995-6.707,6.69c0.004,3.693,3.005,6.685,6.707,6.689   c3.704,0,6.707-2.994,6.707-6.689S34.449,17.199,30.745,17.199z M30.745,28.668c-2.645-0.004-4.787-2.141-4.79-4.779   c0-2.639,2.145-4.779,4.79-4.779c2.646,0,4.791,2.14,4.791,4.779S33.392,28.668,30.745,28.668z" />
                                    <path fill="#FFFFFF"
                                        d="M31.391,20.528v-0.74h-1.313v0.75c-1.629,0.188-2.75,1.018-2.75,2.11c0,0.981,0.629,2.151,3.626,2.151   c1.104,0,1.466,0.167,1.57,0.239c0.032,0.021,0.058,0.039,0.061,0.202c-0.113,0.165-0.737,0.516-1.792,0.516   c-1.092,0-1.723-0.376-1.802-0.533c0.003,0.006,0.01,0.026,0.01,0.055h-1.673c0,1.093,1.121,1.922,2.75,2.11v0.765h1.313v-0.754   c1.692-0.162,2.868-1.003,2.868-2.121c0-2.151-2.401-2.151-3.305-2.151c-1.225,0-1.892-0.219-1.949-0.446   c0.123-0.167,0.745-0.51,1.788-0.51c1.093,0,1.724,0.375,1.803,0.532c-0.003-0.005-0.01-0.026-0.01-0.054h1.673   C34.259,21.53,33.083,20.689,31.391,20.528z" />
                                </g>
                            </svg></div>
                    </div>
                    <div class="class-icon">
                        <span class="text-p">Seguici su:</span>
                        <div class="icon-pay">
                            <a href=""> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30">
                                    <defs>
                                        <filter id="a">
                                            <feColorMatrix in="SourceGraphic"
                                                values="0 0 0 0 1.000000 0 0 0 0 1.000000 0 0 0 0 1.000000 0 0 0 1.000000 0" />
                                        </filter>
                                    </defs>
                                    <g transform="translate(-17 -12)" filter="url(#a)" fill="none" fill-rule="evenodd">
                                        <path
                                            d="M45.344 12H18.656C17.74 12 17 12.741 17 13.656v26.688c0 .915.741 1.656 1.656 1.656h14.368V30.382h-3.91v-4.527h3.91v-3.34c0-3.874 2.367-5.984 5.823-5.984 1.656 0 3.08.123 3.494.178v4.05l-2.398.001c-1.88 0-2.244.893-2.244 2.204v2.89h4.484l-.584 4.528h-3.9V42h7.645C46.26 42 47 41.259 47 40.344V13.656C47 12.74 46.259 12 45.344 12"
                                            fill="#181818" />
                                    </g>
                                </svg></a>
                        </div>
                        <div class="icon-pay">
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30">
                                    <path
                                        d="M13.55 0h2.901l2.509.017c.873.013 1.406.036 2.226.073 1.596.073 2.687.327 3.641.697a7.353 7.353 0 012.657 1.73 7.354 7.354 0 011.73 2.658c.34.874.582 1.863.676 3.252l.057 1.205c.036.914.05 1.73.054 3.878l-.008 4.738a64.66 64.66 0 01-.081 2.938c-.073 1.596-.327 2.687-.698 3.641a7.354 7.354 0 01-1.73 2.657 7.353 7.353 0 01-2.657 1.73c-.875.34-1.864.582-3.252.676l-1.205.057c-.915.036-1.73.05-3.879.054l-4.738-.008a64.6 64.6 0 01-2.937-.081c-1.597-.073-2.687-.327-3.641-.698a7.353 7.353 0 01-2.657-1.73 7.354 7.354 0 01-1.73-2.657c-.34-.875-.582-1.864-.676-3.252l-.065-1.403c-.03-.847-.043-1.7-.046-3.72l.006-4.49c.01-1.491.034-2.075.083-3.146.073-1.597.327-2.687.697-3.641a7.354 7.354 0 011.73-2.657A7.353 7.353 0 015.176.788C6.049.447 7.038.205 8.427.111L9.83.047c.848-.03 1.7-.043 3.721-.046zm4.661 2.71h-6.42c-1.292.012-1.85.034-2.852.08-1.462.067-2.257.311-2.785.517-.7.272-1.2.597-1.725 1.122a4.648 4.648 0 00-1.122 1.725l-.09.244c-.167.481-.338 1.162-.41 2.238l-.059 1.3c-.03.83-.041 1.657-.044 3.64l.007 4.654c.01 1.278.034 1.836.08 2.833.066 1.462.31 2.256.516 2.785.272.7.597 1.2 1.122 1.725.525.525 1.025.85 1.725 1.122l.244.09c.481.166 1.162.338 2.238.41l1.705.072c.766.021 1.677.03 3.56.031l3.79-.004a65.603 65.603 0 003.198-.075l.174-.007c1.462-.067 2.256-.312 2.785-.517.7-.272 1.2-.597 1.725-1.122a4.647 4.647 0 001.122-1.725l.09-.244c.166-.481.338-1.162.41-2.238l.072-1.705c.021-.766.03-1.678.032-3.56l-.005-3.79a66.41 66.41 0 00-.082-3.372c-.067-1.462-.312-2.257-.517-2.785-.272-.7-.597-1.2-1.122-1.725a4.648 4.648 0 00-1.725-1.122l-.244-.09c-.481-.167-1.162-.338-2.238-.41l-1.289-.059c-.527-.019-1.05-.03-1.866-.037zm-3.21 4.757a7.5 7.5 0 110 15 7.5 7.5 0 010-15zm0 2.632a4.869 4.869 0 100 9.737 4.869 4.869 0 000-9.737zm7.834-4.967a1.875 1.875 0 110 3.75 1.875 1.875 0 010-3.75z"
                                        fill="#FFF" fill-rule="evenodd" />
                                </svg></a>
                        </div>
                        <div class="icon-pay">
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="31" height="27">
                                    <defs>
                                        <filter id="a">
                                            <feColorMatrix in="SourceGraphic"
                                                values="0 0 0 0 1.000000 0 0 0 0 1.000000 0 0 0 0 1.000000 0 0 0 1.000000 0" />
                                        </filter>
                                    </defs>
                                    <g transform="translate(-68 -15)" filter="url(#a)" fill="none" fill-rule="evenodd">
                                        <path
                                            d="M77.75 41.1A18.002 18.002 0 0168 38.241c.498.059 1.004.089 1.517.089 2.98 0 5.722-1.017 7.899-2.723a6.366 6.366 0 01-5.941-4.417 6.351 6.351 0 002.872-.109 6.364 6.364 0 01-5.102-6.236v-.08a6.335 6.335 0 002.881.796 6.357 6.357 0 01-2.829-5.294 6.33 6.33 0 01.861-3.198 18.056 18.056 0 0013.11 6.645 6.36 6.36 0 016.195-7.81c1.829.001 3.482.774 4.642 2.01a12.737 12.737 0 004.039-1.544 6.38 6.38 0 01-2.797 3.519A12.717 12.717 0 0099 18.889a12.927 12.927 0 01-3.174 3.292c.013.273.019.547.019.823 0 8.404-6.397 18.095-18.096 18.095"
                                            fill="#181818" />
                                    </g>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="copi">
                    <a class="azienda" href="">Ferrari S.p.A</a>
                    <div><span><a class="c-text" href="">
                                Copyright © 2024 - All Rights Reserved</a></span></div>
                    <div class="frase">
                        <p>Powered by YOOX NET-A-PORTER GROUP</p>
                    </div>
                    <div class="copiright">
                        <div><a class="mappa" href="">Mappa sito</a></div>
                        <div><a class="mappa" href="">Cookie policy</a></div>
                        <div><a class="mappa" href=""></a>Privacy policy</div>
                        <div><a class="mappa" href="">Informazioni sul venditore</a></div>
                    </div>
                </div>
            </div>
        </footer>

    </html>