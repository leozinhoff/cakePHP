<?php /** @var \App\Model\Entity\Image $imageEntity */
echo $this->Form->create($imageEntity, ['type' => 'file']);
 echo $this->Form->control('image' , ['label'=>'upload une image','type' => 'file','class'=>'form-control']);


echo $this->Form->control('description' , ['label'=>'Description: ','type' => 'text' ,'class'=>'form-control']);
echo $this->Form->button('Upload' , ['class' => 'btn btn-primary']);
 echo  $this->Form->end();

?>
