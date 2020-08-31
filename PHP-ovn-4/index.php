<?php
$x = 0;

while($x < 7) {
    echo "hej på dig <br>";
    $x++;
}

$x = 0;

$result = null;

while($x < 10) {
    $result .= $x;
    $x++;
}

print $result . '<br>';

for($i = 0; $i < 7; $i++) {
    echo "hej på dig <br>";
}



$capitals = array(
    array("Finland", "Helsingfors"),
    array("Sverige", "Stockholm"),
    array("Japan", "Tokyo"),
    array("Tyskland", "Berlin"),
);

foreach ($capitals as $capital) {
    echo $capital[1] . ' är huvudstad i ' . $capital[0] . '<br>';
}

$cars = "audi, jeep, volkswagen, ford, opel";
foreach (explode(',', $cars) as $car) {
    echo $car . '<br>';
}

$row = 0;

if ($row == 0) {
    echo "värdet är noll";
}

elseif ($row == 1) {
    echo "1 rad";
}

elseif ($row == range(2, 10))
        echo "texten är " . $row . "rader lång";

else {
    echo "För många rader eller ogiltigt värde";
}

$age = array(
    "name1" => "14.03.1977",
    "name2" => "14.04.1967",
    "name3" => "14.08.1993",
    "name4" => "14.06.1910",
);

foreach($age as $key => $value) {
    echo '<br>' . $key . ", är född månad " . explode('.',  $value)[1];
    echo "<br>";
}

$cities = array(
    "Helsingfors" => "601 035",
    "Esbo" => "255 121",
    "Tammerfors" => "216 586",
    "Vanda" => "204 545",
    "Åbo" => "179 529",
);

asort($cities);

foreach($cities as $key => $value) {
    echo '<br>' . $key;
    echo "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PHP Övning</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

	</body>
</html>