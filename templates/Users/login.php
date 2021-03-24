<?php
$this->assign('title','Ma page de login');
$this->assign('description','Description de ma page de login');

?>

<?=
$this->Form->create($user)?>
<?= $this->Form->control('email',[
    'label'=>'Votre adresse email',
    'class'=>'form-control'
]) ?>
<?= $this->Form->control('password',[
    'label'=>'votre mot de passe',
    'class'=>'form-control'
]) ?>
<?= $this->Form->button('se connecter',['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>
