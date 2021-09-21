<?php class car {
  public $EngineNO;
  public $Model;
   public $Owner;

  function __construct($EngineNO, $Model,$Owner) {
    $this->EngineNO = $EngineNO;
    $this->Model = $Model;
	 $this->Owner = $Owner;
  }
  function get_EngineNO() {
    return $this->EngineNO;
  }
  function get_Model() {
    return $this->Model;
  }
   function get_Owner() {
    return $this->Owner;
  }
}

$car = new car("bangla", "xt56","Ayshik");
echo "<br>";
echo $car->get_EngineNO();
echo "<br>";
echo $car->get_Model();
echo "<br>";
echo $car->get_Owner();
?>