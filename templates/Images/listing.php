<?php $this->assign('title', 'Listing des images');

foreach($out as $element){

echo $this->Html->image($element['file'],['class'=>'s', 'url' => ['controller' => "Images", 'action' =>"onlyOne",$element['id']]]);
};

?>




