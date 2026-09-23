<?php
session_start();

$erreur = '';

if (isset($_POST['reponse'])) {
    $reponse = trim($_POST['reponse']);

    if ($reponse == '') {
        $erreur = "Veuillez entrer une réponse.";
    } else {
        if ($reponse == '1') {
            $_SESSION['score'] = 20;
        } else {
            $_SESSION['score'] = 0;
        }

        header('Location: question2.php');
        exit;
    }
}

require_once 'shared/OpenHtml.php';
?>
<main>
    <h2>Question 1</h2>

   <?php
if ($erreur != '') {
    echo '<p class="erreur">' . $erreur . '</p>';
}
?>

    <p>Quel jour serons-nous demain si mecredi etait il y a trois jours ?</p>

    <form action="question1.php" method="post">
        <label for="reponse">Réponse :</label>
        <input type="text" id="reponse" name="reponse">
        <br>
        <button type="submit">Valider</button>
    </form>
</main>
<?php
require_once 'shared/CloseHtml.php';
?>