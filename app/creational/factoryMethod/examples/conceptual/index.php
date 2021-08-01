<?php

use creational\factoryMethod\examples\conceptual\ConcreteCreator1;
use creational\factoryMethod\examples\conceptual\ConcreteCreator2;

require_once '../../../../../app/bootstrap.php';

?>

    <h2>Factory method</h2>
    <div>Factory Method is a creational design pattern that provides an interface for creating objects in a superclass, but allows subclasses to alter the type of objects that will be created.</div>

    <hr>

<?php

echo "App: Launched with the ConcreteCreator1 . <br>";

$concreteCreator1 = new ConcreteCreator1();
echo $concreteCreator1->someOperation() . '<br><br>';

echo "App: Launched with the ConcreteCreator2 . <br>";

$concreteCreator2 = new ConcreteCreator2();
echo $concreteCreator2->someOperation();
