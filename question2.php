<?php
session_start();

$erreur = '';

if (isset($_POST['reponse'])) {
    $reponse = trim($_POST['reponse']);

    if ($reponse == '') {
        $erreur = "Veuillez entrer une réponse.";
    }
    elseif ($reponse < 1000 || $reponse > 3000 || $reponse % 500 != 0) {
    $erreur = "La réponse doit être comprise entre 1000 et 3000, par pas de 500.";
}else {
    if ($reponse == 1500) {
        $_SESSION['score'] += 20;
    }

    header('Location: question3.php');
    exit;
}

}
require_once 'shared/OpenHtml.php';
?>

<main>
    <h2>Question 2</h2>
    <?php
if ($erreur != '') {
    echo '<p class="erreur">' . $erreur . '</p>';
}
?>

    <p>Qu'est-ce qu'un quart de deux tiers de 9000 ? </p>
    <form action ="question2.php" method = "POST">
        <label for = "reponse">Réponse:</label>
       <input type="number" id="reponse" name="reponse" min="1000" max="3000" step="500">
        <br>
        <button type ="submit">valider</button>
    </form>
</main>


<?php
require_once 'shared/CloseHtml.php';
?>