<?php
require 'etudiant.class.php';
require 'prof.class.php';
$Etudiant=new formetudiant($_POST);
$Etudiant->form();
$Prof=new formprof($_POST);
$Prof->form();
?>