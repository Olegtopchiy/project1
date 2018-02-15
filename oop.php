<?php

abstract  class Customer
  {
      public $oop;
      public function makePattern(){
          echo "this code was object";
          return $this->oop .''. $this->makePattern();
    }
  }
class Framework extends Checker
{

    public $Incapsulation;
    public $Polym;
    public $Inherit;
    public $Framework;
    protected function makeIncapsulation(){
        echo 'this code was protected method';
        return $this->makeIncapsulation() .''. $this->Incapsulation;
    }
    protected function makePolym(){
        echo 'this code was dissimilar object';
       return $this->makePolym() .''. $this->Polym;
    }
    protected function makenInherit(){
        echo 'this code was inherit object';
        return $this->makenInherit() .''. $this->Inherit;
    }
    public function makeSysFrame(){

        return $this->CheckOop() .''. $this->Framework;
    }
}
$framework = new Framework;
$framework ->Incapsulation='inObject';
$framework ->Inherit='inInheritObject';
$framework ->Polym='inPolymObject';
var_dump($framework);
$framework->CheckOop();
var_dump($framework->CheckOop());
abstract  class Checker extends Framework
{
    public function CheckOop(){
        return $this->makeIncapsulation() .''.  $this->makePolym() .''. $this->makenInherit();
    }
}
$system = new System;
$system-> = 'OOP';
abstract  class System extends Customer
{
    public $systems;
    public function makeMethod(){
        echo 'this system method oop';
        return  $this->systems .''. $this->oop .'';
    }
}

