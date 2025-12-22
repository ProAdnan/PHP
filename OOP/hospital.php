<?php

// class Staff
// {


//     public $name;

//     protected $id;


//     private $salary;



//     function __construct($name, $id, $salary)
//     {

//         $this->name = $name;
//         $this->id = $id;
//         $this->salary = $salary;


//     }

//     function __destruct()
//     {

//         echo "<br><br>";

//         echo "Staff member {$this->name} record closed.<br>";
//         echo "Staff member {$this->id} record closed.<br>";
//         echo "Staff member {$this->salary} record closed.<br>";

//     }


//     public function get_salary(){

//         return $this->salary;

//     }


//     public function set_salary($salary){  //should be private???

//         $this->salary = $salary;

//     }



// }


abstract class Staff
{


    public $name;

    protected $id;


    private $salary;




    abstract public function performDuty();





    function __construct($name, $id, $salary)
    {

        $this->name = $name;
        $this->id = $id;
        $this->salary = $salary;


    }

    function __destruct()
    {

        echo "<br><br>";

        echo "Staff member {$this->name} record closed.<br>";
        echo "Staff member {$this->id} record closed.<br>";
        echo "Staff member {$this->salary} record closed.<br>";

    }


    public function set_salary($salary)
    {  //should be private???

        $this->salary = $salary;

    }


    public function get_salary()
    {

        return $this->salary;

    }


    public function set_id($id)
    {

        $this->id = $id;

    }


    public function get_id()
    {

        return $this->id;

    }






    public function getTaxedSalary()
    {

        return $this->salary * 0.90;

    }


}


interface SurgeonInterface
{

    public function performSurgery();

}



interface EmergencyInterface
{

    public function handleEmergency();


}







class Doctor extends Staff implements SurgeonInterface
{

    public $specialty;



    public function performSurgery()
    {

        echo "<br> Perform Surgery ! <br> ";
    }





    public function performDuty()
    {

        echo "<br> Hello, i am performDuty method from Doctor class: " . $this->name;

    }




}   


class Nurse extends Staff implements EmergencyInterface
{


    public $shiftTime;


    public function handleEmergency()
    {

        echo "<br> handleEmergency ! <br> ";
    }


    public function performDuty()
    {

        echo "<br> hii,performDuty method from Nurse class :" . $this->name ;


    }




}


class HospitalManager
{


    public function checkWork(Staff $staffMember)
    {


        return $staffMember->performDuty();



    }



}






$doc_obj1 = new Doctor("Adnan", 1, 500);
$doc_obj2 = new Doctor("Mohammed", 2, 400);




// echo $doc_obj1->$id . "<br>"; //err 

echo "Doctor Id: " . $doc_obj1->get_id() . "<br>";


$nurse_obj1 = new Nurse("Lena", 1, 500);
$nurse_obj2 = new Nurse("Layan", 2, 300);





echo "<br> Nurse salary of {$nurse_obj1->name} : " . $nurse_obj1->get_salary() . "<br>";

echo "Salary of {$nurse_obj1->name} changed to 200" . $nurse_obj1->set_salary(200) ."<br>";

echo "<br> Nurse salary after : " . $nurse_obj1->get_salary() . "<br>";




$objects = array($doc_obj1, $doc_obj2, $nurse_obj1, $nurse_obj2);

$ho_ma_obj1 = new HospitalManager;


foreach ($objects as $obj) {

    $ho_ma_obj1->checkWork($obj);

}






/*

id was protected because:
its not necessary to the user to see it so its not private,
and it is important and must be not accessible to anyone (private),

so the right choice is protected, which makes the id flexible



salary was private because:

in general: its a sensetive information that its not allowed
to anyone to see it or modify it.
technically: using private prevents editing it so easily, so we improve security. 


*/













?>