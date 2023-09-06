<?php
    require_once ("ClassEmployee.php");
    require_once ("ClassClient.php");

    $objEmployee = new Employee(56789456, "Pedro Contreras", 35);
    $objEmployee->setPosition("Administrador");
    echo $objEmployee->getPersonalInformation();
    echo "Position: " . $objEmployee->getPosition();
    echo "<br>";

    $objClient = new Client(80956347, "Luis Eduardo Martinez", 52);
    $objClient->setCredit(1000);
    echo $objClient->getPersonalInformation();
    echo "Credit: $" . $objClient->getCredit();
    
?>