<?php
    require_once ("ClassPerson.php");

    class Client extends Person{

        protected $fltCredit;

        function __construct(int $dpi, string $name, int $age){
            parent::__construct($dpi, $name, $age);
            
        }

        public function setCredit(string $credit){
            $this->fltCredit = $credit;
        }

        public function getCredit(): float{
            return $this->fltCredit;
        }

    }//End class Employee
?>