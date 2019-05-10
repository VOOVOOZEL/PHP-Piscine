<?php

abstract class Fighter
{
   private $_type;

   public function __construct($tmp)
   {
       $this->_type = $tmp;
   }

   public function getType()
   {
       return $this->_type;
   }

}