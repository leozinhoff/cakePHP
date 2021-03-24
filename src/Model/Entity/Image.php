<?php


namespace App\Model\Entity;


use Cake\ORM\Entity;
use Cake\Utility\Text;

class Image extends Entity
{


    protected function _setName($name)
    {
        return $name;
    }


    protected function _setDescription($desc)
    {
        return Text::slug($desc);
    }






}
