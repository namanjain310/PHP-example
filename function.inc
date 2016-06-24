<?php
 //include_once 'connect.inc';
 if(isset($_POST["submit"])){
   extract($_POST);
   $flag=true;
   $message='';
  
  
   if(trim($uname)==''){
        $flag=false;
        $message .='<li>User name required</li>';    
   }
   
   if(strlen($uname) < 4){
        $flag=false;
        $message .='<li>User Name must be atleast 3 character</li>';    
   }
   if(!preg_match("/^[a-zA-Z0-9]*$/",$uname)){
       $flag=false;
       $message.='<li>User Name must contain only alphanumeric charcters';
   }
   if(trim($password)==''){
        $flag=false;
        $message .='<li>Password required</li>';
   }
   if(trim($confirm_password)==''){
        $flag=false;
        $message .='<li>Confirm password required</li.';
   }
   if(trim($fname)==''){
        $flag=false;
        $message .='<li>First Name is required</li>';
   }
   if(trim($lname)==''){
        $flag=false;
        $message .='<li>Last Name is  required</li>';
   }
   
   
   
   
   if($flag){  
        //$md5password =  md5($password);
        //$querystring= "Insert INTO `user` (`uname`,`password`) VALUES ('{$uname}','{$md5password}')";
        //if(mysql_query($querystring)){
             header("location:index.php?front=message");
        //}
       
   }
 }
?>
