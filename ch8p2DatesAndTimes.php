<?php
include_once('index.php');

echo '<h2>Chapter 8 - paragraph Dates and Times</h2>';
echo '<h3>Listing 8.3: Datetime construction</h3>';
showcode(<<<'CODE'
// Current Time
$date = new \DateTime();
print_r($date);

// Current Time
$date = new \DateTime("now");
print_r($date);

// Eastern Time (Daylight savings is taken in account)
$date = new \DateTime("2014-06-18 14:05 EST");
print_r($date);

// Current time, yesterday
$date = new \DateTime("yesterday");
print_r($date);

// Current time, two days ago
$date = new \DateTime("-2 days");
print_r($date);

// Current time, same day last week
$date = new \DateTime("last week");
print_r($date);

// Current time, same day, 3 weeks ago
$date = new \DateTime("-3 week");
print_r($date);
CODE
);
echo 'When NewDate is called with the second param, then first date is calculated and then the second param is applied';
showcode(<<<'CODE'
$timezone = new \DateTimeZone("Europe/London");
// The current default local time, adjusted to the
// specified timezone, 3 weeks ago
$date = new \DateTime("3 weeks ago", $timezone);
print_r ($date);
CODE
);
echo 'Some datemethods:';
showcode(<<<'CODE'
$date = new \DateTime();
$date->setDate(1984,11,01); // year, month, day
print_r ($date);
$date->setISOdate(2003,52,3); // year, week, day(opt)
print_r ($date);
$date->setTime(11,59); // hour, minute, seconds(opt)
print_r ($date);;
$date->setTimestamp(1437223440); // Unix timestanp
print_r ($date);
CODE
);

echo '<h3></h3>';
echo '';
showcode(<<<'CODE'
CODE
);
echo '';
showcode(<<<'CODE'
CODE
);

echo '<h2></h2>';
showcode(<<<'CODE'
CODE
);
echo '<h2></h2>';
echo '';
showcode(<<<'CODE'
CODE
);

