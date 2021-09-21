<?php
    class passport{
        private $name,$lastname,$patronymic, $age, $city, $gender, $passportID;
        public function __construct()
        {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->patronymic = $patronymic;
            $this->age = $age;
            $this->city = $city;
            $this->gender = $gender;
            $this->passportID = $passportID;
        }
        public function shows(){
            Echo $this->name;
        }
    }
        

  