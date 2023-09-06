<?php
require_once __DIR__.'/./Department.php';
class Degree {
    private $id;
    public $departmentId;
    public $name;
    public $level;
    public $address;
    public $email;
    public $website;

    public function __construct(
        $id,
        $department,
        $name,
        $level,
        $address,
        $email,
        $website
    )
    {
        $this->setId($id);
        $this->departmentId = $department;
        $this->name = $name;
        $this->level = $level;
        $this->address = $address;
        $this->email = $email;
        $this->website = $website;
    }

    public function setId($id){
        $this->id = $id;
    }
}