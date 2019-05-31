<?php
namespace classi\utilities;
//dichiarazione classe "date"
class Date {
    private $day;
    private $month;
    private $year;
    
    public function __construct(int $day,int $month,int $year) {
        
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
        
    }
}

