<?php

    session_start();

    if (isset($_SESSION['user_id'])) {
        header('Location: /dmeet');
        # code...
    }

    require 'database.php';

    if (!empty($_POST['emailSession']) && !empty($_POST['passwordSession'])){
        $records = $conn->prepare('SELECT id, email, password FROM usuario Where email=:emailSession');
        $records->bindParam(':emailSession', $_POST['emailSession']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $messageSession = '';

        if (count($results) > 0 && password_verify($_POST['passwordSession'], $results['password'])) {
            $_SESSION['user_id'] = $results['id'];
            header('Location: /dmeet');
        } else{
            $messageSession = 'Lo sentimos, tus datos no coinciden';
        }
    }

?>