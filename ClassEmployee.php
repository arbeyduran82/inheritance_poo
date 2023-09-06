<?php
    require_once ("ClassPerson.php");

    class Employee extends Person{

        protected $strPosition;

        function __construct(int $dpi, string $name, int $age){
            parent::__construct($dpi, $name, $age);
            
        }

        public function setPosition(string $position){
            $this->strPosition = $position;
        }

        public function getPosition(): string{
            return $this->strPosition;
        }

    }//End class Employee
?>