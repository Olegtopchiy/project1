<?php
 interface TestOne {
     public function exampleOne();
 }
interface TestTwo {
     public function exampleTwo();
}
class TestClass implements TestOne, TestTwo {
     public function exampleOne()
     {
         echo 'Ex#1'."\n";

}
        public  function exampleTwo(){
         echo 'Ex#2'."\n";
     }
}

$TestClass = new TestClass();
 function getTestOne (TestOne $w){
     $w->exampleOne();
 }
 function getTesttwo(TestTwo $c){
     $c->exampleTwo();
 }

interface Vehicle{
    public function rul();
    public function pedal();
    public function kpp();
}

abstract class Earth implements Vehicle{
    public function getAction($action){
        switch ($action){
            case 'rul':{
                $this->rul();
                break;
            }
            case 'pedal':{
                $this->pedal();
                break;
            }
            case 'kpp':{
                $this->kpp();
                break;
            }
            default:{
                echo 'exists '.$action."\n";
                break;
            }
        }
    }

    public function newGetAction($action)
    {
        $this->$action();
    }
    public function __call($name, $arguments)
    {
        echo 'exists '.$name."\n";
    }
}

class Car extends Earth
{
    function rul(){
        echo 'exists rul'."\n";
    }
    function pedal(){
        echo 'exists pedal'."\n";
    }
    function kpp(){
        echo 'exists kpp'."\n";
    }
}
class Moto extends Earth
{
    function rul(){
        echo 'exists rul'."\n";
    }
    function pedal(){
        echo 'not exist pedal'."\n";
    }
    function kpp(){
        echo 'exists kpp'."\n";
    }
}
$car = new Car();
$moto = new Moto();
function goVehicle(Earth $v){
//    $v->rul();
//    $v->pedal();
//    $v->kpp();
//    $v->drive();
    $v->getAction('rul');
    $v->getAction('drive');
    $v->newGetAction('rul');
    $v->newGetAction('drive');
}
goVehicle($car);
echo "\n";
goVehicle($moto);