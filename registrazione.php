<?php
   session_start();
   include "connessione.php";
   if(isset($_POST['submit'])){
     $n=mysqli_real_escape_string($db,$_POST['nome']);
     $c=mysqli_real_escape_string($db,$_POST['cognome']);
     $u=mysqli_real_escape_string($db,$_POST['email']);
     $p=mysqli_real_escape_string($db,$_POST['password']);
     $p=hash('sha256',$p);
     //controllo
        $query="SELECT * FROM utenti WHERE email = '$u'";
        $result = $db->query($query)  ;
        $num = mysqli_num_rows($result);

        if ($num > 0) {
            $erroreUserUsata = true;
           
        } else {
                $query="INSERT INTO utenti (nome, cognome, email, password) VALUES ('$n','$c','$u','$p')";
                $db->query($query) ;
                $db->close();
                header("Location: index_ferrari.php");
   }
   }
?>


<html>

<head>
    <title>Registrazione Ferrari</title>
    <link rel="stylesheet" href="reg.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="reg.js"></script>
</head>

<body>
    <?php
        if (isset($erroreUserUsata)) {
            echo '<div id="error-message-password" class="nascosto">
                    
                </div>
                <div id="error-message-email" class="nascosto">
                    
                </div>';

            }
    ?>

    <form action="registrazione.php" method="POST" id="formReg">

        <div class="login-box">
            <h1>Registrazione</h1>
            <div class="textbox">
                <span class="material-symbols-outlined">
                    person
                </span>
                <input type="text" placeholder="Nome" name="nome" value="" required />
            </div>

            <div class="textbox">
                <span class="material-symbols-outlined">
                    person
                </span>
                <input type="text" placeholder="Cognome" name="cognome" value="" required />
            </div>

            <div class="textbox">
                <span class="material-symbols-outlined">
                    mail
                </span>
                <input type="text" placeholder="email" name="email" value="" required />
            </div>

            <div class="textbox">
                <span class="material-symbols-outlined">
                    lock
                </span>
                <input type="password" placeholder="Password" class="password" name="password" value="" required />
            </div>

            <input class="btn" type="submit" name="submit" value="Registrati" />
        </div>
    </form>
</body>

</html>