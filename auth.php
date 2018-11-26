<?php
    session_start();
    include "main.php";
    $obj=new Main;
    if(isset($_POST['submit'])){
        $u=$_POST['username'];
        $pw=$_POST['password'];
        $data=$obj->retrive($u);
        if($data->num_rows>0){
            while($row=$data->fetch_object()){
                $uid=$row->id;
                $pass=$row->password;
            }
        }

        $e_pw=md5($pw);
        if($e_pw === $pass){
            $obj->set_session($uid);
        }else{
            header('Location:login.php');
        }

        if($obj->index()==true){
            header('Location:insert.php');
        }
    }else{
        header('Location:login.php');
    }
?>