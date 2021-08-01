<?php

use structural\composite\examples\conceptual\Composite;
use structural\composite\examples\conceptual\Leaf;

require_once '../../../../../app/bootstrap.php';

?>

    <h2>Composite also known as object tree</h2>
    <div>Composite is a structural design pattern that lets you compose objects into tree structures and then work with these structures as if they were individual objects.</div>

    <hr>

<?php

$simple = new Leaf();
echo "I've got a simple component:<br>";
echo $simple->operation();
echo '<br><br>';

$tree = new Composite();
$branch1 = new Composite();
$branch1->add(new Leaf());
$branch1->add(new Leaf());

$branch2 = new Composite();
$branch2->add(new Leaf());
$tree->add($branch1);
$tree->add($branch2);

echo "Now I've got a composite tree:<br>";
echo $tree->operation();
