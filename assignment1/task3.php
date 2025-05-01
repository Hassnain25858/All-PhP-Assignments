<?php 
class User{
    protected $name;
    protected $email;
    public function __construct($name, $email) { $this->name = $name;
        $this->email=$email;
     }
    public function getdetails(){
        return $this->name
        ."<br>".$this->email;
    }
    }
    class Admin extends User{
        protected $role;
        public function __construct($name,$email,$role) {
            parent::__construct($name,$email);
            $this->role=$role;
        }
        public function getdetails(){
          return  parent::getdetails()."<br>".$this->role;
        }
    }
    $userdetails=new Admin("hassnain","h.a@gmail.com","Programmer");
    echo $userdetails->getdetails();

?>