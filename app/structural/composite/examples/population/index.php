<?php

use structural\composite\examples\population\City;
use structural\composite\examples\population\Continent;
use structural\composite\examples\population\Country;
use structural\composite\examples\population\Population;

require_once '../../../../../app/bootstrap.php';

?>

    <h2>Composite also known as object tree</h2>
    <div>Composite is a structural design pattern that lets you compose objects into tree structures and then work with these structures as if they were individual objects.</div>

    <hr>

<?php

$continent = new Continent('Europe');

$poland = new Country("Poland");

$rzeszow = new City('Rzeszow');
$rzeszow->add(new Population(50));
$poland->add($rzeszow);

$krakow = new City('Krakow');
$krakow->add(new Population(80));
$poland->add($krakow);

$continent->add($poland);

$spain = new Country("Spain");

$barcelona = new City('Barcelona');
$barcelona->add(new Population(100));
$spain->add($barcelona);

$continent->add($spain);

echo "Result: ";
echo $continent->count() . '<br>';
echo "Structure: ";
echo $continent->structure();
