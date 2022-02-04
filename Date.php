<?php
class Date{
    private $year;
    private $month;
    private $day;
    private $da;
    public function __construct($year,$month,$day)
    {   
        $this->year=$year;
        $this->month=$month;
        $this->day=$day;  
        $this->da="$year-$month-$day";
    }

    public function __get($property )
    {if($property == 'weekday'){
       return (string) date("w", strtotime($this->da) );
    }
    }
}
$d1= new Date(2022,1,26);
echo $d1->weekday;