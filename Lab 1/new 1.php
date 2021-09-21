<?php

class car
{
  public $EngineNO;
   public $Model;
    public $Owner;
 
  public function showinfo()
  {
    return $this->EngineNO;
	
  }
   public function showinfo2()
  {
    return $this->Model;
	
  }
   public function showinfo3()
  {
    return $this->Owner;
	
  }
}
 
$car = new car();

$car->EngineNO = 'bangla car';
$car->Model = ' x34';
$car->Owner = ' musa';
echo $car->showinfo();
echo $car->showinfo2();
echo $car->showinfo3();


?>