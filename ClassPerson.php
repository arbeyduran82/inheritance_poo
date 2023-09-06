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

        public function getDatosPersonales(){
            $data = "
                <h2>PERSONAL INFORMATION</h2>
                DPI: { $this->intDpi}<br>
                Name: { $this->strName}<br>
                AGE: { $this->intAge}<br>
            ";
        }

    } //End class Person

?>