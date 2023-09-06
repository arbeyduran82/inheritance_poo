<?php 
    class Person{
        public $intDpi;
        public $strName;
        public $intAge;

        function __construct(int $dpi, string $name, int $age){
            $this->intDpi = $dpi;
            $this->strName = $name;
            $this->intAge = $age;
            
        }

        public function getPersonalInformation(){
            $data = "
                <h2>PERSONAL INFORMATION</h2>
                DPI: {$this->intDpi}<br>
                Name: {$this->strName}<br>
                Age: {$this->intAge}<br>
            ";
            return $data;
        }

    } //End class Person

?>