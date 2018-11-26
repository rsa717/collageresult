<?php
    class Main{
        protected $host="localhost";
        protected $u="root";
        protected $pw="";
        protected $database="login";
        protected $con;

        protected $username;
        protected $password;
        protected $user;
        protected $name;
        

        protected $sql;
        protected $result;

        public function __construct(){
            if(!isset($this->con)){
                $this->con=new mysqli($this->host,$this->u,$this->pw,$this->database);
                if(!$this->con){
                    echo "cannot connected";
                }else{
                    return $this->con;
                }
            }
        }

        public function index(){
            if($_SESSION['user']!=""){
                return true;
            }else{
                return false;
            }
        }

        public function retrive($u){
            $this->username=$u;
            $this->sql="SELECT * FROM user2 WHERE username='$this->username'";
            $this->result=$this->con->query($this->sql);
            if($this->result==true){
                return $this->result;
            }else{
                echo "Error";
            }
        }

        public function set_session($uid){
            $this->user=$uid;
            $_SESSION['user']=$this->user;
        }

        public function __destruct(){
            $this->con->close();
        }
    }
?>