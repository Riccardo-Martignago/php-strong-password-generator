<?php 
    require_once __DIR__ . '/dati_utente.php';
    session_start();
    session_unset();
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $_SESSION["name"] = $_POST["username"];
        $_SESSION["pass"] = $_POST["password"];
    };
    if($_SESSION["name"]!= null && $_SESSION["pass"] != null){
        foreach($utenti as $user){
            if ($user['username'] == $_SESSION["name"] && $user['password'] == $_SESSION["pass"]){
            header('Location: ./index.php');
            }
        };
    } else {
        echo 'INSERISCI LE CREDENZIALI!';
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="username">Inserire Username: </label>
        <input type="text" name="username" id="username">
        <label for="password">Inserire Password: </label>
        <input type="password" name="password" id="password">
        <button type="submit">Entra</button>
    </form>
</body>
</html>