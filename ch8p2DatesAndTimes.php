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
echo 'Some datemethods: setDate, setISOdate, setTime, setTimestamp';
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

echo 'Show a date in some format is always done with date->format';
showcode(<<<'CODE'
$date = new DateTime();
echo $date->format($date::ATOM) . "\n";
echo $date->format($date::COOKIE) . "\n";;
echo $date->format($date::ISO8601) . "\n";;
echo $date->format($date::RFC822) . "\n";;
echo $date->format($date::RFC850) . "\n";;
echo $date->format($date::RFC1036) . "\n";;
echo $date->format($date::RFC1123) . "\n";;
echo $date->format($date::RFC2822);

CODE
);
echo 'Handling Custom Formats';
showcode(<<<'CODE'
$ambiguousDate = '10/11/12';
$date = \DateTime::createFromFormat("d/m/y", $ambiguousDate);
echo $date->format(\DateTime::ISO8601) ."\n";
$date = \DateTime::createFromFormat("y/m/d", $ambiguousDate);
echo $date->format(\DateTime::ISO8601) ."\n";
CODE
);

echo '<h3>Listing 8.4: Comparing dates</h3>';
showcode(<<<'CODE'
$date = new \DateTime("2014-05-31 1:30pm EST");
$tz = new \DateTimeZone("Europe/Amsterdam");
$date2 = new \DateTime("2014-05-31 8:30pm", $tz);
if ($date == $date2) {
echo "These dates are the same date/time!";
}
CODE
);
echo '<h3>DateTime Math</h3>';
showcode(<<<'CODE'
$date = new \DateTime();
$date->modify("+1 month");
echo $date->format(\DateTime::ISO8601) ."\n";
CODE
);
echo '<h3>Listing 8.5: Working with intervals</h3>';
showcode(<<<'CODE'
$date = new \DateTime();
$interval = new \DateInterval('P1Y3M4DT45M');
// Add 1 year, 3 months, 4 days, 45 minutes
$date->add($interval);
echo $date->format(\DateTime::ISO8601) ."\n";

$date = new \DateTime();
// Subtract 1 year, 3 months, 4 days, 45 minutes
$date->sub($interval);
echo $date->format(\DateTime::ISO8601) ."\n";
CODE
);
echo '<h3>Listing 8.6: Calculating date differences</h3>';
showcode(<<<'CODE'
$davey = new \DateTime(
"1984-05-31 00:00",
new \DateTimeZone("Europe/London")
);
$gabriel = new \DateTime(
"2014-04-07 00:00",
new \DateTimeZone("America/New_York")
);
print_r($davey->diff($gabriel));
CODE
);

