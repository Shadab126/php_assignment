<?php
// Get the current month and year
$month = date('n');
$year = date('Y');

// Get the first day of the month
$firstDay = mktime(0, 0, 0, $month, 1, $year);

// Get the number of days in the month
$numDays = date('t', $firstDay);

// Get the name of the first day of the month (e.g., "Sunday")
$firstDayName = date('l', $firstDay);

// Create an array of day names
$dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

// Create a table to display the calendar
echo '<table border="1">';
echo '<caption>' . date('F Y', $firstDay) . '</caption>';
echo '<tr>';

// Output the day names as table headers
foreach ($dayNames as $dayName) {
    echo '<th>' . $dayName . '</th>';
}

echo '</tr>';
echo '<tr>';

// Output blank cells for the days before the first day of the month
for ($i = 0; $i < array_search($firstDayName, $dayNames); $i++) {
    echo '<td></td>';
}

// Output the days of the month
for ($day = 1; $day <= $numDays; $day++) {
    echo '<td>' . $day . '</td>';

    // Start a new row for the next week
    if (($i + $day) % 7 == 0 || $day == $numDays) {
        echo '</tr>';
        if ($day < $numDays) {
            echo '<tr>';
        }
    }
}

echo '</tr>';
echo '</table>';
?>
