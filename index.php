<?php
 class User {

   public $name;
   public $surname;
   public $email;
   public $password;

   function __construct($name,$surname,$email,$password) {
   $this->name = $name;
   $this->surname = $surname;
   $this->email = $email;
   $this->password = $password;
   }

   public function __toString(){
     $str = "User: <br> Name:" . $this -> name . "<br>"
      . "Surname: " . $this -> surname ."<br>"
      . "Email: " . $this -> email ."<br>"
      . "Password: " . $this -> password ."<br>";
      return $str;
   }
 }

 $user1 = new User("Mario","Rossi","marirossi@email.com","fegfw");
 $user2 = new User("Laura","Bianchi","email2@mail.com","fegeg");



 echo $user1 . "<br>" . $user2;


 ?>
