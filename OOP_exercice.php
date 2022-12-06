<?php


// class User{

//   private $name;


//   public function Setname($username)
// {

//     $this->name=$username;




// }


// public function Getname(){

//   return $this->name;

// }

// }


// $user1 = new User();

// echo $user1->Setname('hamza khouzima ag24');
// echo $user1->Getname();





// class User{
    
//  protected  $name ;

//  public function __construct($username){

//  $this->name=$username ;


//  }

// }

// class Costumer extends User{

//    public $balance;

//     public function __construct($username,$balance1){
   
//       parent::__construct($username);
//       $this->balance = $balance1;
//     }
  
//     public function payment($amount){

//       return $this->name . ' paid '.$amount;

//     }


//     public function getBalance(){

//       echo "<br>";
//       return  $this->name.'have'. $this->balance;


//     }
// }
// $User1  =new Costumer('hamza khouzima ','3aaaaa');

// echo $User1 -> payment(100);
// echo $User1 -> getBalance();
// // echo $User1->__construct('remains 10dh');







class User{

  public $name;
  public static $MinPassLength = 6;

  public static function Passchecker($pass){

    if(strlen($pass)>= self::$MinPassLength){
      return true;
    
  }
  else{
  return false;
  }
  
  
}
}
// $password = 'hello';

if(User::Passchecker('zejhfbefze')){
  echo 'valide';
}
  else{
    echo 'unvalide';
  }







?>

