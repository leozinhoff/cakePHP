<?php $this->assign('title', 'Une image détaillé');


    echo $this->Html->image($out['file']);
    echo '<p>Description: '.$out['description'].'</p>';
    echo '<p>Date et heure d\'ajout: '.$out['created'].'</p>';

   echo $this->Html->link('Télécharger', '/img/'.$out['file'],['download'=>$out['file']]);
   echo $this->Form->button('Supprimer' , ['class' => 'btn btn-primary','controller' => "Images",'action' =>"onlyOne",$out['id']]);




?>
