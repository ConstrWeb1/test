<!-- HTM.php -->
<!DOCTYPE html>
<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs des champs du formulaire
    $nom = $_POST["name"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $message = $_POST["message"];
    $urgence = isset($_POST["emergency"]) ? "Oui" : "Non";

    // Adresse e-mail à laquelle envoyer le courriel
    $destinataire = "constrweb1324@outlook.com";

    // Sujet du courriel
    $sujet = "Nouveau formulaire de contact";

    // Corps du message
    $corps_message = "Nom: $nom\n";
    $corps_message .= "Prénom: $prenom\n";
    $corps_message .= "Courriel: $email\n";
    $corps_message .= "Téléphone: $telephone\n";
    $corps_message .= "Demande: $message\n";
    $corps_message .= "Besoin d'une intervention d'urgence: $urgence\n";

    // Envoi du courriel
    mail($destinataire, $sujet, $corps_message);

    // Affichage d'un message de confirmation
    echo "<p>Merci pour votre message! Nous vous contacterons bientôt.</p>";
}
?>
</body>
</html>
