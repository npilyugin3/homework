<?php
     class PC{
//поля тип материнская плата, оперативная память,жесткий диск,ссд,видеокарта,блок питания,корпус
    private $motherboard, $ram, $harddrive, $ssd, $videocard, $powersupply, $case;
    public function __construct(string $Matrics, int $Size)
   {
    $this->motherboard = $motherboard;
    $this->ram = $ram;
    $this->harddrive = $harddrive;
    $this->ssd = $ssd;
    $this->videocard = $videocard;
    $this->powersupply = $powersupply;
    $this->case = $case;

   }
  //метод
  public function turning_on(){
    echo "включение";
  }
}
