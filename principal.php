<?php

require 'classes/form.class.php';

$form=new form($_POST);

echo '<form method="post" action="#">';

$form ->texte("Nom");
$form ->texte("prénom");
$form ->email("mail");
$form ->texte("Téléphone");
$form ->date("Naissance");
$form ->submit("Envoyer");

echo '</form>';
?>