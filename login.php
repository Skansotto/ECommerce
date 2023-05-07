<?php
session_start();
session_destroy();

if (isset($_GET["msg"]))
    echo "<script>alert('Errore: " . $_GET['msg']. "');</script>";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <title>Pagina di login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <h2>Login</h2>
        <form action="chkLogin.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Inserisci email" name="user" required>
            </div>
            <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Inserisci password" name="pwd" required>
            </div>
            <button type="submit" class="btn btn-primary">Accedi</button>
        </form>
        <br>
        <a href="registrazione.php">Registrati</a>
    </div>

</body>

</html>