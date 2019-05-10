<?php

Class UnholyFactory
{
   public $fighters = [];

   public function absorb($namefighter)
   {
       if ($namefighter instanceof Fighter) {

           if (array_key_exists($namefighter->getType(), $this->fighters)) {
               print("(Factory already absorbed a fighter of type". $namefighter->getType(). ")" . PHP_EOL);
           } else {
               $this->fighters[$namefighter->getType()] = $namefighter;

               print("(Factory absorbed a fighter of type " . $namefighter->getType(). ")" . PHP_EOL);
           }
       } 
       else
           print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
   }

   public function fabricate($group)
   {
       if (array_key_exists($group, $this->fighters)) {
           print ("(Factory fabricates a fighter of type ". $group . ")" . PHP_EOL);
           return ($this->fighters[$group]);
       } 
       else {
           print("(Factory hasn't absorbed any fighter of type " . $group . ")" . PHP_EOL);
           return NULL;
       }
   }

}