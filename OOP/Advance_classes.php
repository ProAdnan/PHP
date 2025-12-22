<?php

class class1
{

    public function __construct()
    {
        echo "MyClass class has initialized!" . "<br>";
    }
}

class class2
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
        echo "Hello All, I am {$this->name} " . "<br>";

    }

}


class class_factorial
{

    public $num;
    public function __construct($num)
    {

        $this->num = $num;

        $fact = 1;

        for ($i = 1; $i <= $num; $i++) {

            $fact *= $i;

        }



        echo "Factorial of {$this->num} = {$fact} <br>";


    }



}



class sort_arrays
{



    public function sort_arr($arr)
    {

        sort($arr);

        echo "<br> <pre>";

        print_r($arr);
        echo "</pre>";

    }

}




class difference
{



    public function claculate($date1, $date2)
    {

        $year1 = (int) substr($date1, 0, 4);
        $year2 = (int) substr($date2, 0, 4);
        $year_result = "";

        if ($year1 > $year2) {

            $year_result = (string) ($year1 - $year2);

        } else {
            $year_result = (string) ($year2 - $year1);
        }


        $mon1 = (int) substr($date1, 5, 6);
        $mon2 = (int) substr($date2, 5, 6);
        $mon_result = "";

        if ($mon1 > $mon2) {

            $mon_result = (string) ($mon1 - $mon2);

        } else {
            $mon_result = (string) ($mon2 - $mon1);
        }


        $day1 = (int) substr($date1, 8);
        $day2 = (int) substr($date2, 8);
        $day_result = "";

        if ($day1 > $day2) {

            $day_result = (string) ($day1 - $day2);

        } else {
            $day_result = (string) ($day2 - $day1);
        }




        echo "<br><br> Difference : {$year_result} years, {$mon_result} months, {$day_result} days ";


    }
}




class str_toDate
{

    public function strToDate($str)
    {

        $date = date_create($str);

      

        if (substr($str, 2, 1) == "-") {

            echo date_format($date, "Y-m-d H:i:s");

        } elseif (substr($str, 2, 1) == "/") {

            echo date_format($date, "Y/m/d H:i:s");



        }




    }


}



$obj = new class1;
$obj2 = new class2("Adnan");
$obj3 = new class_factorial(5);

$arr = array(11, -2, 4, 35, 0, 8, -9);

$obj4 = new sort_arrays;

$obj4->sort_arr($arr);


$date1 = "1981-11-03";

$date2 = "2013-09-04";



$obj5 = new difference;

$obj5->claculate($date1, $date2);



$obj6 = new str_toDate;


echo "<br><br>";

$str = "12/08/2004";

$obj6->strToDate($str);





?>