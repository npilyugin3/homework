<?php
    class Screen{
        public $manufacturer, $diagonal, $Hz, $matrix;
        public function set_manufacturer(string $manufacturer)
        {
            $this->manufacturer = $manufacturer;
        }
        public function set_diagonal(string $diagonal)
        {
            $this->diagonal = $diagonal;
        }
        public function set_Hz(string $Hz)
        {
            $this->Hz = $Hz;
        }
        public function set_matrix(string $matrix)
        {
            $this->matrix = $matrix;
        }
        public function inclusion(){
            //Реализация включения монитра
        }
    }