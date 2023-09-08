<?php 
class Employer {
        public $name ;
        public $email ;
        PUBLIC $salary ;
    public function __construct( $name ,$email,$salary)
    {
            $this->name =  $name ;
            $this->email = $email ;
            $this->salary = $salary ;
    }
}
class Employee implements Iterator{
        public $employer = [];
        public $pointer = 0 ;
        public function __construct(array $employer){
                $this->employer = $employer ;
        }
        public function current() :mixed{
                return $this->employer[$this->pointer];
        }
        public function next() : void{
                 $this->pointer++;
        }
        public function valid() : bool{
                return count($this->employer) > $this->pointer ;
        }
        public function rewind():void{
                $this->pointer = 0 ;
        }
        public function key():mixed{
                return $this->pointer ;
        }
}
$arr = [1, 2, 3] ;
$employers = new Employee($arr);

foreach ($employers as $employer) {
        echo $employer ;
}

// ------------------------------------------------------------------------------------------------
interface Payment {
        public function payment() ;
        public function proceed() ;
}

         class FAWRY implements Payment {
        function payment(){
                return "Fawry" ;
        }
        function proceed(){
                echo "Proceeding" ; 
        }
}
class Vodafone_Cash implements Payment
{
        function payment()
        {
                return "Vodafone_Cash";
        }
        function proceed()
        {
                echo "Proceeding";
        }
}

class get_Payment_method {
        public $payment_method ;
        public function __construct(payment $payment_meth)
        {
                $this->payment_method = $payment_meth;
        }
        public function get_payment_method() {
                return "the payment method is " . $this->payment_method->payment(); 
        }
}
$user = (new get_Payment_method(new Vodafone_Cash))->get_Payment_method();
echo $user ;
// ------------------------------------------------------------------------------------------------
// name space 
// namespace A1 ;
// class A {
//         public  function get_name() {
//                 echo "hello " ; 
//         }
// }

// namespace A2 ;
// class A
// {
//         static function get_name1()
//         {
//                 echo "hello ";
//         }
// }

//  A1\A::get_name() ;
//  A2\A::get_name() ;
// // A2\A::get_name() ;
// namespace A  ;
// class A2 {
//          function get_name() {
//                 echo "hello " ;
//         }
// }

class connection {
        private static $conn ;
        private function __construct($db_connection , $server_name , $db_name , $user_name , $password){
                echo "<br />" ;
                echo "hello"; 
                connection::$conn = new PDO("$db_connection:host=$server_name;dbname=$db_name" ,$user_name ,$password) ;
        }
        static function connection($db_connection, $server_name, $db_name, $user_name, $password){
                if (!is_object(connection::$conn)) {
                        
                        new Connection($db_connection, $server_name, $db_name, $user_name, $password) ;
                }
        }
}
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
connection::connection("mysql","localhost" , "shop_db" , "root" , "");
connection::connection("mysql","localhost" , "shop_db" , "root" , "");  
//  any thing is secure should be put in the .env file 
// to get the data from .env file we will download package 
// what is meaning by package -> it is open source code  that valid for any one to use it 
// any package has a  specific codes that everyone do something 
// any php package is in website "packagist.org" ;
// any php package for a specific file like .env will research for it buy his name like this "search about .env " 
// any file has several packages but we will choose the highest package that have high reputation like "vlucas/phpdotenv"
// to download any php package we want a tool  called "composer" this is the php manager 

// vendor file is so heavy so we but this file in .gitignore 


// but if someone is working with me and  wants to pull file from github but there is wrong because there is files does't push in the repository 
// how we can overwrite this 
// from composer.json there is the package details 
// and from the cmd we will write "composer install"
// any version si consist of three numbers => "n1.n2.n3" like 1.0.0
/*
n1 => patch version number -> we will edit it if there is update in any bug  like the version number will be "1.0.1" 
n2 => minor version number -> we will add a new feature but this feature will not be affect on anything  like the version number will be "1.1.0"
m3 => major version number -> we will add a new feature or edit something but this feature or edit will  be affect on anything like the version number will be "2.0.0"


*/

