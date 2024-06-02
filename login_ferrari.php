<?php 
    session_start();
    include "connessione.php";
    if(isset($_POST['submit'])){
        $p = mysqli_real_escape_string($db,$_POST['password']);
        $u = mysqli_real_escape_string($db,$_POST['email']);
        $p = hash("sha256", $p); // Utilizzo  della funzione hash
        
        //echo "$u + $p";

        $rq=" SELECT id FROM utenti WHERE email = '".$u."' AND password = '".$p."'"; // Query che verra eseguita per cercare i dati
        $rs= mysqli_query($db,$rq);
        
        if( mysqli_num_rows($rs) > 0){ 
            echo "dati presi";
            $row = $rs ->fetch_assoc(); 
            $id = $row['id'];// assoscio ad una variabile il mio id 

            $_SESSION["email"] = $u;
            $_SESSION["password"] = $p;
            $_SESSION['id'] = $id; // passo l'id alla sessione
            header("Location: index_ferrari.php");
            exit;
        }
        else{
            $erroreUetenteInesistente = true;
        }            
    }
?>


<html>

<head>
    <title>Login ferrari</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="login_ferrari.css" />
    <script src="login_ferrari.js" defer></script>
</head>

<body>
    <?php 
            if (isset($erroreUetenteInesistente)) {       
                 echo '<div id="modal" class="modal">
                 <div class="modal-content">
                     <span class="close">&times;</span>
                     <h2>Errore!</h2>
                     <p>Utente non trovato. Per favore, inserisci dei dati validi.</p>
                     <a href="login_ferrari.php">Ricarica pagina</a>
                 </div>
                </div>';
            }
        ?>
    <div class=contenitore-login>
        <form action="login_ferrari.php" method="POST" id="formlog">
            <div class="login-box">
                <h1>Ti diamo il benvenuto</h1>
                <div class="textbox">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                    <input type="text" placeholder="email" name="email" value="" required>
                </div>

                <div class="textbox">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                    <input type="password" placeholder="Password" name="password" value="" required>
                </div>

                <input type="submit" class="btn" name="submit" value="Accedi">
            </div>
        </form>
        <div class=textbox1>
            <button class="btn-1"><a href="registrazione.php">Registrati</a></button>
        </div>
    </div>
</body>

</html>