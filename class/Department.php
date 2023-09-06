<?
class Department {
    private $id;
    public $name;
    public $address;
    public $phone;
    public $email;
    public $website;
    public $head_of_department;

    public function __construct(
        $id,
        $name,
        $address,
        $phone,
        $email,
        $website,
        $head_of_department
    )
    {
        $this->setId($id);
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->website = $website;
        $this->head_of_department = $head_of_department;
    }

    public function setId($id){
        $this->id = $id;
    }
};