<?php 

class Demo
{
    
    public $name;
    public $age;
    public $address ; 
    public $email;
    public $contact;
    public function __construct()
    {

        $this->name =  $_POST['first'];
        $this->age =  $_POST['age'];
        $this->email = $_POST['mail'];
        $this->contact = $_POST['contact'];
        $this->address = $_POST['address'];



    }
    public function printdata()
    {
        echo"Name is:  ".$this->name;
        echo"<p></p>Age is:  ".$this->age;
        echo"<p></p>Email is:".$this->email;
        echo"<p></p>Contact No:".$this->contact;
        echo"<p></p>Address:  ".$this->address;


    }

}

$ob = new Demo();
$ob->printdata();

?>