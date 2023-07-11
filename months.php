<?php
echo "<h1>if and using array variable </h1>";
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

if ($a[0] === 1) {
    echo $a[0] . "- January";
    echo "<br>";
}
if ($a[1] === 2) {
    echo $a[1] . "-February";
    echo "<br>";
}
if ($a[2] === 3) {
    echo $a[2] . "-March";
    echo "<br>";
}
if ($a[3] === 4) {
    echo $a[3] . "-April";
    echo "<br>";
}
if ($a[4] === 5) {
    echo $a[4] . "- May";
    echo "<br>";
}
if ($a[5] === 6) {
    echo $a[5] . "-June";
    echo "<br>";
}
if ($a[6] === 7) {
    echo $a[6] . "-July";
    echo "<br>";
}
if ($a[7] === 8) {
    echo $a[7] . "-August";
    echo "<br>";
}
if ($a[8] === 9) {
    echo $a[8] . "- September";
    echo "<br>";
}
if ($a[9] === 10) {
    echo $a[9] . "-October";
    echo "<br>";
}
if ($a[10] === 11) {
    echo $a[10] . "- November";
    echo "<br>";
}
if ($a[11] === 12) {
    echo $a[11] . "-December";
    echo "<br>";
}

echo "<h1>for loop and using array variable </h1>";
$month = [
    '1-January',
    '2-February',
    '3-March',
    '4-April',
    '5-May',
    '6-June',
    '7-July',
    '8-August',
    '9-September',
    '10-October',
    '11-November',
    '12-December'
];

for ($i = 0; $i < count($month); $i++) {
    echo "<br>";
    echo  $month[$i]." ";
}

echo "<h1>foreach and using array variable </h1>";

 $month = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
];

foreach ($month as $key => $value) {
    echo $key."-$value <br>";
 }



echo "<h1>Using if, elseif </h1>";

$month = 12;


if ($month == 1) {
    echo "January";
} elseif ($month == 2) {
    echo "February";
} elseif ($month == 3) {
    echo "March";
} elseif ($month == 4) {
    echo "April";
} elseif ($month == 5) {
    echo "May";
} elseif ($month == 6) {
    echo "June";
} elseif ($month == 7) {
    echo "July";
} elseif ($month == 8) {
    echo "August";
} elseif ($month == 9) {
    echo "September";
} elseif ($month == 10) {
    echo "October";
} elseif ($month == 11) {
    echo "November";
} elseif ($month == 12) {
    echo "December";
} else {
    echo "Invalid";
}

echo "<h1>Using while loop</h1>";

$m = 1;
while ($m <= 12) {
    if ($m == 1) {
        echo "January";
    } elseif ($m == 2) {
        echo "February";
    } elseif ($m == 3) {
        echo "March";
    } elseif ($m == 4) {
        echo "April";
    } elseif ($m == 5) {
        echo "May";
    } elseif ($m == 6) {
        echo "June";
    } elseif ($m == 7) {
        echo "July";
    } elseif ($m == 8) {
        echo "August";
    } elseif ($m == 9) {
        echo "September";
    } elseif ($m == 10) {
        echo "October";
    } elseif ($m == 11) {
        echo "November";
    } elseif ($m == 12) {
        echo "December";
    }
    echo "<br>";
    $m++;
}
