<?php
session_start();
require_once 'Model/connexionBDD.php';
require_once 'Vues/vContacterConseiller.php';
if(!isset($_SESSION['email'])){
if (isset($_POST['message'])) {
    $_SESSION['id_conseiller'] = 4;
    $id_utilisateur = 999999;
    $objet = $_POST['sujet'];
    $contenu = $_POST['message'];
    contacter_conseiller($id_utilisateur, $objet, $contenu);
}
}else {

    if (isset($_POST['message'])) {
        $id_conseiller = $_SESSION['id_conseiller'];
        $id_utilisateur = $_SESSION['id_utilisateur'];
        $objet = $_POST['sujet'];
        $contenu = $_POST['message'];
        contacter_conseiller($id_utilisateur, $objet, $contenu);
    }
}
?>
