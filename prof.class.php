<?php 

class formprof extends formetudiant
{
     
    public function form()
    {

        $form=new form($_POST);
        echo '<form method="post" action="#">';
        $form->texte("Nom");
        $form->texte("Prénom");
        $form->email("Mail");
        $form->texte("Téléphone");
        $form->number("Num_sec_sociale");
        $form->submit("Envoyer");
        echo '</form>';
    
    
    }
    
}

?>