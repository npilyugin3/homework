<?php
    class CAT{
        //Приватные поля ( имя, возраст и вес)
        private $name, $age, $weight;
        //Конструктор для создания объекта
        public function __construct(int $name, string $age, int $weight)
        {
            $this->name = $name;
            $this->age = $age;
            $this->weight = $weight;
        }
        //Мы не можем обратиться к полю на прямую потому-что оно приватное, поэтому возвращаем его
        public function get_name(){
            return $this->name;
        }
        public function get_age(){
            return $this->age;
        }
        public function get_weight(){
            return $this->weight;
        }
        //Метод
        public function jump(){
            echo "Прыжок";
        }
    }
  