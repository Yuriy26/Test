<?php
class Person
{
    public $name = 'Vika';
    public $age = '20';
    public $job = 'model';

    public function __construct(string $name, string $age, string $job)
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
    }


}

class Director extends Person
{
    public $money = '200';
    public function __construct($name, $age, $job, $money)
    {
        parent::__construct($name, $age, $job);
        $this->money = $money;

    }

}
class Manager extends Person
{


}
class Developer extends Person

{

}

//$director = new Director('Victor', '35', 'Director');
//echo $director->job;
$manager = new Director('Marina', '30', 'Manager', '24555');
echo $manager->money;

$developer = new Person();
