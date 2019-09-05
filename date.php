<?php
//$d = new DateTime( '2010-01-31' );
//$d->modify( 'next month' );
//echo $d->format( ) . PHP_EOL;


function add($date_str, $months)
{
    $date = new DateTime($date_str);

    $start_day = $date->format('j');

    $date->modify("+{$months} month");

    $end_day = $date->format('j');

    if ($start_day != $end_day)
    {
        $date->modify('last day of last month');
    }

    return $date->format('Y-m-d');
}
$data = add('2010-1-31', 1);
echo $data . PHP_EOL;
